<?php

namespace Itec\CategoryType\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Itec\CategoryType\Models\CategoryType::class
    ];
}