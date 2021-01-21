<?php

namespace Itec\Career\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class ShopCareerDataGrid  extends DataGrid
{
    protected $index = 'career_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('careers')
                ->addSelect('careers.id as career_id', 'position', 'vacancy', 'employment_status','deadline')
                ->where('job_status','1');


        $this->addFilter('career_id', 'careers.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        // $this->addColumn([
        //     'index' => 'career_id',
        //     'label' => trans('career_lang::app.datagrid.id'),
        //     'type' => 'number',
        //     'searchable' => true,
        //     'sortable' => true,
        //     'filterable' => true
        // ]);

        $this->addColumn([
            'index' => 'position',
            'label' => trans('career_lang::app.datagrid.position'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'vacancy',
            'label' => trans('career_lang::app.datagrid.vacancy'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'employment_status',
            'label' => trans('career_lang::app.datagrid.employment_status'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'deadline',
            'label' => trans('career_lang::app.datagrid.deadline'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,


            'closure' => true,
            'wrapper' => function ($value){
                return date("F jS, Y", strtotime($value->deadline));
            }
        ]);

        
    }

    public function prepareActions() {

        $this->addAction([
            'type' => 'View',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'shop.career.view',
            'icon' => 'icon eye-icon',
            'title' => trans('career_lang::app.career.view')
        ]);
    }
}