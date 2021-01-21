<?php

namespace Itec\Career\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Itec\Career\Models\Career::class
    ];
}