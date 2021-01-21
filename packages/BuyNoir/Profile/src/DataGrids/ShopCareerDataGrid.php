<?php

namespace Sellnoir\Profile\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class ShopProfileDataGrid  extends DataGrid
{
    protected $index = 'profile_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('profiles')
                ->addSelect('profiles.id as profile_id', 'full_name', 'email', 'mobile','created_at')
                ->where('id','1');


        $this->addFilter('profile_id', 'profiles.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        // $this->addColumn([
        //     'index' => 'profile_id',
        //     'label' => trans('profile_lang::app.datagrid.id'),
        //     'type' => 'number',
        //     'searchable' => true,
        //     'sortable' => true,
        //     'filterable' => true
        // ]);

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
            'filterable' => false
        ]);

        

        
    }

    public function prepareActions() {

        $this->addAction([
            'type' => 'View',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'shop.profile.view',
            'icon' => 'icon eye-icon',
            'title' => trans('profile_lang::app.profile.view')
        ]);
    }
}