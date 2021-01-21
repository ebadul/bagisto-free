<?php

namespace Itec\Category\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Webkul\Core\Eloquent\Repository;
use Webkul\Category\Models\Category;
use Webkul\Category\Models\CategoryTranslation;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class CategoryRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

    public function model()
    {
        return 'Webkul\Category\Contracts\Category';
    }

    public function getVisibleNavCategoryTree($id = null)
    {
        static $categories = [];

        if(array_key_exists($id, $categories))
            return $categories[$id];

        return $categories[$id] = $id
                ? $this->model::orderBy('position', 'ASC')->where('status', 1)->where('type_code', 'navigation')->descendantsOf($id)->toTree()
                : $this->model::orderBy('position', 'ASC')->where('status', 1)->where('type_code', 'navigation')->get()->toTree();

    }

}