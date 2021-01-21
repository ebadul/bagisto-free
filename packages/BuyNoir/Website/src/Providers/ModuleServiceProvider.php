<?php

namespace Sellnoir\Profile\Providers;

use Konekt\Concord\BaseModuleServiceProvider;

class ModuleServiceProvider extends BaseModuleServiceProvider
{
    protected $models = [
        \Sellnoir\Profile\Models\Profile::class
    ];
}