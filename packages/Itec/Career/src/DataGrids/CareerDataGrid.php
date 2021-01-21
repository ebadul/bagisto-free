<?php

namespace Itec\Career\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class CareerDataGrid extends DataGrid
{
    protected $index = 'career_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('careers')
                ->addSelect('careers.id as career_id', 'position', 'vacancy', 'employment_status', 'skill_type','job_location','salary','deadline','email', 'created_at', 'job_status');


        $this->addFilter('career_id', 'careers.id');

        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'career_id',
            'label' => trans('career_lang::app.datagrid.id'),
            'type' => 'number',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

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
            'index' => 'skill_type',
            'label' => trans('career_lang::app.datagrid.skill_type'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'job_location',
            'label' => trans('career_lang::app.datagrid.job_location'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'salary',
            'label' => trans('career_lang::app.datagrid.salary'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'email',
            'label' => trans('career_lang::app.datagrid.email'),
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

        $this->addColumn([
            'index' => 'created_at',
            'label' => trans('career_lang::app.datagrid.created_at'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false,


            'closure' => true,
            'wrapper' => function ($value){
                return date("F jS, Y", strtotime($value->created_at));
            }
        ]);

        $this->addColumn([
            'index' => 'job_status',
            'label' => trans('career_lang::app.datagrid.job_status'),
            'type' => 'string',
            'searchable' => false,
            'sortable' => true,
            'filterable' => false,

            'closure' => true,

            'wrapper' => function ($value) {
                if ($value->job_status == 1)
                    return '<span class="badge badge-md badge-success">Published</span>';
                elseif($value->job_status == 0)
                    return '<span class="badge badge-md badge-warning">Unpublished</span>';
            }
        ]);

        
    }

    public function prepareActions() {

        $this->addAction([
            'type' => 'View',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.career.view',
            'icon' => 'icon eye-icon',
            'title' => trans('career_lang::app.career.view')
        ]);

        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.career.edit',
            'icon' => 'icon pencil-lg-icon',
            'title' => trans('career_lang::app.career.edit')
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'POST', // use GET request only for redirect purposes
            'route' => 'admin.career.delete',
            'icon' => 'icon trash-icon',
            'title' => trans('career_lang::app.career.delete')
        ]);
    }
}