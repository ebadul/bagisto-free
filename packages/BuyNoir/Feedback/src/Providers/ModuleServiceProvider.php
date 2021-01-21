<?php

namespace Buynoir\Feedback\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Buynoir\Feedback\Models\Feedback::class
    ];
}