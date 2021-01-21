<?php

namespace Itec\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Webkul\Category\Repositories\CategoryRepository as Category;
use Itec\CategoryType\Repositories\CategoryTypeRepository as CategoryType;
use Webkul\Category\Models\CategoryTranslation;
use Webkul\Attribute\Repositories\AttributeRepository;


class CategoryController extends Controller
{

    protected $_config;
    protected $category;
    protected $category_type;
    protected $attributeRepository;

    /**
     * Create a new controller instance.
     *
     * @param  \Webkul\Category\Repositories\CategoryRepository  $category
     * @return void
     */
    public function __construct(Category $category, CategoryType $category_type, AttributeRepository $attributeRepository)
    {
        $this->category = $category;
        $this->category_type = $category_type;
        $this->attributeRepository = $attributeRepository;
        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view($this->_config['view']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories         = $this->category->getCategoryTree(null, ['id']);
        $category_types     = $this->category_type->getCategoryTypeTree(null, ['id']);
        $attributes         = $this->attributeRepository->findWhere(['is_filterable' =>  1]);

        return view($this->_config['view'], compact('categories', 'category_types', 'attributes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(), [
            'slug' => ['required', 'unique:category_translations,slug', new \Webkul\Core\Contracts\Validations\Slug],
            'name' => 'required',
            'image.*' => 'mimes:jpeg,jpg,bmp,png',
            'description' => 'required_if:display_mode,==,description_only,products_and_description'
        ]);

        if (strtolower(request()->input('name')) == 'root') {
            $categoryTransalation = new CategoryTranslation();

            $result = $categoryTransalation->where('name', request()->input('name'))->get();

            if(count($result) > 0) {
                session()->flash('error', trans('admin::app.response.create-root-failure'));

                return redirect()->back();
            }
        }

        $category = $this->category->create(request()->all());

        session()->flash('success', trans('admin::app.response.create-success', ['name' => 'Category']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category           = $this->category->findOrFail($id);
        $categories         = $this->category->getCategoryTree($id);
        $category_type      = $this->category_type->getCategoryTypeTree(null, ['id']);
        $attributes         = $this->attributeRepository->findWhere(['is_filterable' =>  1]);

        return view($this->_config['view'], compact('category', 'categories', 'category_type', 'attributes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $locale = request()->get('locale') ?: app()->getLocale();

        $this->validate(request(), [
            $locale . '.slug' => ['required', new \Webkul\Core\Contracts\Validations\Slug, function ($attribute, $value, $fail) use ($id) {
                if (! $this->category->isSlugUnique($id, $value)) {
                    $fail(trans('admin::app.response.already-taken', ['name' => 'Category']));
                }
            }],
            $locale . '.name' => 'required',
            'image.*' => 'mimes:jpeg,jpg,bmp,png'
        ]);

        $this->category->update(request()->all(), $id);

        session()->flash('success', trans('admin::app.response.update-success', ['name' => 'Category']));

        return redirect()->route($this->_config['redirect']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = $this->category->findOrFail($id);

        if(strtolower($category->name) == "root") {
            session()->flash('warning', trans('admin::app.response.delete-category-root', ['name' => 'Category']));
        } else {
            try {

                $this->category->delete($id);

                session()->flash('success', trans('admin::app.response.delete-success', ['name' => 'Category']));

                return response()->json(['message' => true], 200);
            } catch(\Exception $e) {
                session()->flash('error', trans('admin::app.response.delete-failed', ['name' => 'Category']));
            }
        }

        return response()->json(['message' => false], 400);
    }

    /**
     * Remove the specified resources from database
     *
     * @return response \Illuminate\Http\Response
     */
    public function massDestroy() {
        $suppressFlash = false;

        if (request()->isMethod('delete') || request()->isMethod('post')) {
            $indexes = explode(',', request()->input('indexes'));

            foreach ($indexes as $key => $value) {
                try {

                    $this->category->delete($value);

                } catch(\Exception $e) {
                    $suppressFlash = true;

                    continue;
                }
            }

            if (! $suppressFlash)
                session()->flash('success', trans('admin::app.datagrid.mass-ops.delete-success'));
            else
                session()->flash('info', trans('admin::app.datagrid.mass-ops.partial-action', ['resource' => 'Attribute Family']));

            return redirect()->back();
        } else {
            session()->flash('error', trans('admin::app.datagrid.mass-ops.method-error'));

            return redirect()->back();
        }
    }
}