<?php

namespace CodexBD\SaleReport\DataGrids;

use Webkul\Ui\DataGrid\DataGrid;
use DB;


class SaleReportDataGrid extends DataGrid
{
    protected $index = 'sale_report_id'; //the column that needs to be treated as index column

    protected $sortOrder = 'desc'; //asc or desc

    protected $itemsPerPage = 50;

    public function prepareQueryBuilder()
    {
        $queryBuilder = DB::table('sale_reports')
                ->addSelect('sale_reports.id as sale_report_id', 'position', 'deadline','email', 'created_at', 'job_status');

        $this->addFilter('sale_report_id', 'sale_reports.id');
        $this->setQueryBuilder($queryBuilder);
    }

    public function addColumns()
    {
        $this->addColumn([
            'index' => 'sale_report_id',
            'label' => trans('salereport_lang::app.datagrid.id'),
            'type' => 'number',
            'searchable' => true,
            'sortable' => true,
            'filterable' => true
        ]);

        $this->addColumn([
            'index' => 'position',
            'label' => trans('salereport_lang::app.datagrid.position'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'email',
            'label' => trans('salereport_lang::app.datagrid.email'),
            'type' => 'string',
            'searchable' => true,
            'sortable' => true,
            'filterable' => false
        ]);

        $this->addColumn([
            'index' => 'deadline',
            'label' => trans('salereport_lang::app.datagrid.deadline'),
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
            'label' => trans('salereport_lang::app.datagrid.created_at'),
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
            'label' => trans('salereport_lang::app.datagrid.job_status'),
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
            'route' => 'admin.salereport.view',
            'icon' => 'icon eye-icon',
            'title' => trans('salereport_lang::app.salereport.view')
        ]);

        $this->addAction([
            'type' => 'Edit',
            'method' => 'GET', // use GET request only for redirect purposes
            'route' => 'admin.salereport.edit',
            'icon' => 'icon pencil-lg-icon',
            'title' => trans('salereport_lang::app.salereport.edit')
        ]);

        $this->addAction([
            'type' => 'Delete',
            'method' => 'PUT', // use GET request only for redirect purposes
            'route' => 'admin.salereport.delete',
            'icon' => 'icon trash-icon',
            'title' => trans('salereport_lang::app.salereport.delete')
        ]);
    }
}