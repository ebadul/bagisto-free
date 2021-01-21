<?php

namespace CodexBD\SaleReport\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \CodexBD\SaleReport\Models\SaleReport::class
    ];
}