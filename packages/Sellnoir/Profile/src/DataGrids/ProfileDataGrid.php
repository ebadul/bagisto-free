<?php

namespace Sellnoir\Profile\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class ProfileDataGrid extends DataGrid
{
    protected $index = 'profile_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('profiles')
                ->addSelect('profiles.id as profile_id', 'full_name', 'email', 'mobile','created_at');


        $this->addFilter('profile_id', 'profiles.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'profile_id',
            'label' => trans('profile_lang::app.datagrid.id'),
            'type' => 'number',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'full_name',
            'label' => trans('profile_lang::app.datagrid.full_name'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

   
        $this->addColumn([
            'index' => 'email',
            'label' => trans('profile_lang::app.datagrid.email'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'mobile',
            'label' => trans('profile_lang::app.datagrid.mobile'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,


            'closure' => true,
            'wrapper' => function ($value){
                return date("F jS, Y", strtotime($value->mobile));
            }
        ]);

        $this->addColumn([
            'index' => 'created_at',
            'label' => trans('profile_lang::app.datagrid.created_at'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,


            'closure' => true,
            'wrapper' => function ($value){
                return date("F jS, Y", strtotime($value->created_at));
            }
        ]);

      

        
    }

    public function prepareActions() {

        $this->addAction([
            'type' => 'View',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.career.view',
            'icon' => 'icon eye-icon',
            'title' => trans('profile_lang::app.profile.view')
        ]);

        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.career.edit',
            'icon' => 'icon pencil-lg-icon',
            'title' => trans('profile_lang::app.profile.edit')
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'POST', // use GET request only for redirect purposes
            'route' => 'admin.career.delete',
            'icon' => 'icon trash-icon',
            'title' => trans('profile_lang::app.profile.delete')
        ]);
    }
}