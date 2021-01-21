<?php

namespace Itec\Category\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Event;
use Itec\Category\Repositories\CategoryRepository as Category;
use Itec\CategoryType\Repositories\CategoryTypeRepository as CategoryType;
use Webkul\Category\Models\CategoryTranslation;


class ShopCategoryController extends Controller
{
    /**
     * Contains route related configuration
     *
     * @var array
     */
    protected $_config;

    /**
     * CategoryRepository object
     *
     * @var array
     */
    protected $category;
    protected $category_type;


    public function __construct(Category $category, CategoryType $category_type)
    {
        $this->category = $category;
        $this->category_type = $category_type;
        $this->_config = request('_config');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories         = $this->category->getCategoryTree(null, ['id']);
        $category_types     = $this->category_type->getCategoryTypeTree(null, ['id']);

        return view($this->_config['view'], compact('categories', 'category_types'));
    }

}