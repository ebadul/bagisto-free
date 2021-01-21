<?php

namespace Itec\Category\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;

class CategoryDataGrid extends DataGrid
{
    protected $index = 'category_id';
    protected $sortOrder = 'asc';
    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('categories as cat')
                ->select('cat.id as category_id', 'ct.name as category_name', 'cat.position as category_position', 'cat.status', 'ct.locale',
                    DB::raw('COUNT(DISTINCT pc.product_id) as count'))
                ->leftJoin('category_translations as ct', function($leftJoin) {
                    $leftJoin->on('cat.id', '=', 'ct.category_id')
                        ->where('ct.locale', app()->getLocale());
                })
                ->leftJoin('product_categories as pc', 'cat.id', '=', 'pc.category_id')

                ->leftJoin('category_types', 'cat.type_code', '=', 'category_types.code')
                ->addSelect('cat.type_code as category_type_code', 'category_types.name as category_type')

                ->groupBy('cat.id');


        $this->addFilter('category_id',             'cat.id');
        $this->addFilter('category_name',           'ct.name');
        $this->addFilter('category_position',       'cat.position');
        $this->addFilter('category_type',           'category_types.name');
        $this->addFilter('category_status',         'cat.status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'category_id',
            'label' => trans('admin::app.datagrid.id'),
            'type' => 'number',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'category_name',
            'label' => trans('admin::app.datagrid.name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'category_position',
            'label' => trans('admin::app.datagrid.position'),
            'type' => 'string',
            'searchable' => false,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'category_type',
            'label' => trans('admin::app.datagrid.type'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'category_status',
            'label' => trans('admin::app.datagrid.status'),
            'type' => 'boolean',
            'sortable' => true,
            'searchable' => true,
            'filterable' => true,
            'wrapper' => function($value) {
                if ($value->status == 1)
                    return 'Active';
                else
                    return 'Inactive';
            }
        ]);

        $this->addColumn([
            'index' => 'count',
            'label' => trans('admin::app.datagrid.no-of-products'),
            'type' => 'number',
            'sortable' => true,
            'searchable' => false,
            'filterable' => false
        ]);
    }

    public function prepareActions() {
        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.catalog.categories.edit',
            'icon' => 'icon pencil-lg-icon'
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'POST', // use GET request only for redirect purposes
            'route' => 'admin.catalog.categories.delete',
            'confirm_text' => trans('ui::app.datagrid.massaction.delete', ['resource' => 'product']),
            'icon' => 'icon trash-icon'
        ]);
    }


    public function prepareMassActions() {
        $this->addMassAction([
            'type' => 'delete',
            'label' => 'Delete',
            'action' => route('admin.catalog.categories.massdelete'),
            'method' => 'DELETE'
        ]);

        $this->enableMassAction = true;
    }
}