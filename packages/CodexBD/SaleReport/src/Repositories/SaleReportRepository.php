<?php

namespace CodexBD\SaleReport\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Webkul\Core\Eloquent\Repository;
use CodexBD\SaleReport\Models\SaleReport;


class SaleReportRepository extends Repository
{

    public function __construct(App $app)
    {
        parent::__construct($app);
    }

  
    public function model()
    {
        return 'CodexBD\SaleReport\Contracts\SaleReport';
    }

    public function update(array $data, $id, $attribute = "id")
    {
        $sale_report = $this->find($id);
        $sale_report->update($data);
        return $sale_report;
    }


}