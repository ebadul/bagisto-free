<?php

namespace Itec\CategoryType\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;

/**
 * CategoryTypeDataGrid Class
 *
 * @author    Md Rezaul Karim <rkreza24@gmail.com>
 * @copyright 2019 Itec Digital Ltd (http://www.itecdigitalbd.com)
 */
class CategoryTypeDataGrid  extends DataGrid
{
    protected $sortOrder = 'desc'; //asc or desc
    protected $index = 'id';
    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('category_types')
        ->select(
                'category_types.id', 
                'category_types.code',
                'category_types.name',
                'category_types.status'
            );

        $this->addFilter('id',          'category_types.id');
        $this->addFilter('code',        'category_types.code');
        $this->addFilter('name',        'category_types.name');
        $this->addFilter('status',      'category_types.status');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index'         => 'id',
            'label'         => trans('category_type_lang::app.datagrid.id'),
            'type'          => 'number',
            'searchable'    => false,
            'sortable'      => true,
            'filterable'    => true
        ]);

        $this->addColumn([
            'index'         => 'code',
            'label'         => trans('category_type_lang::app.datagrid.code'),
            'type'          => 'string',
            'searchable'    => true,
            'sortable'      => true,
            'filterable'    => true
        ]);

        $this->addColumn([
            'index'         => 'name',
            'label'         => trans('category_type_lang::app.datagrid.name'),
            'type'          => 'string',
            'searchable'    => true,
            'sortable'      => true,
            'filterable'    => true
        ]);

        $this->addColumn([
            'index'         => 'status',
            'label'         => trans('category_type_lang::app.datagrid.status'),
            'type'          => 'boolean',
            'sortable'      => true,
            'searchable'    => false,
            'filterable'    => true,
            'wrapper'       => function($value) {
                if ($value->status == 1)
                    return 'Active';
                else
                    return 'Inactive';
            }
        ]);
    }

    public function prepareActions() {
        $this->addAction([
            'type'          => 'Edit',
            'method'        => 'GET', // use GET request only for redirect purposes
            'route'         => 'category.type.edit',
            'icon'          => 'icon pencil-lg-icon'
        ]);

        $this->addAction([
            'type'          => 'Delete',
            'method'        => 'POST', // use GET request only for redirect purposes
            'route'         => 'category.type.delete',
            'icon'          => 'icon trash-icon'
        ]);

        $this->enableAction = true;
    }


}