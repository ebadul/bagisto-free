<?php

namespace Itec\CategoryType\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Itec\CategoryType\Models\CategoryType;

/**
 * CategoryType Reposotory
 *
 * @author    Jitendra Singh <jitendra@webkul.com>
 * @copyright 2018 Webkul Software Pvt Ltd (http://www.webkul.com)
 */
class CategoryTypeRepository extends Repository
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return 'Itec\CategoryType\Contracts\CategoryType';
    }

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data)
    {

        $category_type = $this->model->create($data);

        return $category_type;
    }

    /**
     * Specify CategoryType tree
     *
     * @param integer $id
     * @return mixed
     */
    public function getCategoryTypeTree($id = null)
    {
        return $id
            ? $this->model::orderBy('id', 'ASC')->where('id', '!=', $id)->get()
            : $this->model::orderBy('id', 'ASC')->get();
    }


    /**
     * Get root categories
     *
     * @return mixed
     */
    public function getRootCategoryTypes()
    {
        return $this->model::withDepth()->having('depth', '=', 0)->get();
    }

    /**
     * get visible CategoryType tree
     *
     * @param integer $id
     * @return mixed
     */
    public function getVisibleCategoryTypeTree($id = null)
    {
        static $category_types = [];

        if(array_key_exists($id, $category_types))
            return $category_types[$id];

        return $category_types[$id] = $id
                ? $this->model::orderBy('id', 'ASC')->where('status', 1)->descendantsOf($id)->toTree()
                : $this->model::orderBy('id', 'ASC')->where('status', 1)->get()->toTree();
    }

    /**
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute = "id")
    {
        $category_type = $this->find($id);


        $category_type->update($data);


        return $category_type;
    }

    /**
     * @param $id
     * @return void
     */
    public function delete($id)
    {

        parent::delete($id);

    }

    /**
     * @param array $data
     * @param mixed $category_type
     * @return void
     */

    public function getPartial()
    {
        $category_types = $this->model->all();
        $trimmed = array();

        foreach ($category_types as $key => $category_type) {
            if ($category_type->name != null || $category_type->name != "") {
                $trimmed[$key] = [
                    'id' => $category_type->id,
                    'name' => $category_type->name
                ];
            }
        }

        return $trimmed;
    }
}