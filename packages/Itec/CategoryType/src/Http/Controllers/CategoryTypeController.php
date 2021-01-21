<?php

namespace Itec\CategoryType\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Itec\CategoryType\Repositories\CategoryTypeRepository as CategoryType;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\File;

/**
 * CategoryTypeController
 *
 * @author    Md Rezaul Karim <rkreza24@gmail.com>
 * @copyright 2019 Itec Digital Ltd (http://www.itecdigitalbd.com)
 */

class CategoryTypeController extends Controller
{

    protected $category_type;
    protected $_config;


    public function __construct(CategoryType $category_type)
    {
        
        $this->category_type = $category_type;
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
        return view($this->_config['view']);


        $category_type = $this->category_type->getCategoryTypeTree(null, ['id']);
        return view($this->_config['view'], compact('category_type'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate(request(), [
            'code' => 'required',
            'name' => 'required'
        ]);

        $category_type = $this->category_type->create(request()->all());

        if ($category_type) {
            return redirect()
                ->route('category.type.index')
                ->with('success',trans('category_type_lang::app.response.create-success', ['name' => 'Category Type']));

            return response()
                ->json(['message' => true], 200);
        }else{
            return redirect()
                ->route('category.type.index')
                ->with('failed',trans('category_type_lang::app.response.create-failed', ['name' => 'Category Type']));
        }

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    // public function show(CategoryType $category_type)
    // {
    //     return view($this->_config['view']);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_types = $this->category_type->getCategoryTypeTree($id);
        $category_type = $this->category_type->findOrFail($id);
        return view($this->_config['view'], compact('category_type', 'category_types'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryType  $category_type
     * @return \Illuminate\Http\Response
    */
    public function update(Request $request, $id)
    {
        $this->validate(request(), [
            'name' => 'string|required',
        ]);

        $category_type_update = $this->category_type->update(request()->all(), $id);

        if ($category_type_update) {
            return redirect()
                ->route('category.type.index')
                ->with('success',trans('category_type_lang::app.response.update-success', ['name' => 'Category Type']));

            return response()
                ->json(['message' => true], 200);
        }else{
            return redirect()
                ->route('category.type.index')
                ->with('failed',trans('category_type_lang::app.response.update-failed', ['name' => 'Category Type']));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category_type = $this->category_type->findOrFail($id);
        
        try {

            $this->category_type->delete($id);

            session()
                ->flash('success', trans('category_type_lang::app.response.delete-success', ['name' => 'Category Type']));
            
        } catch(\Exception $e) {
            session()->flash('error', trans('category_type_lang::app.response.delete-failed', ['name' => 'Category Type']));
        }
        

        return response()->json(['message' => false], 400);
    }

}
