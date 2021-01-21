<?php

namespace Itec\Category\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Event;

class CategoryServiceProvider extends ServiceProvider
{
    /**
    * Bootstrap services.
    *
    * @return void
    */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'category_view');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'category_lang');

        $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');

        $this->publishes([
            __DIR__ . '/../Resources/views' => resource_path('views/vendor'),
        ]);

        $this->app->concord->registerModel(
            \Webkul\Category\Contracts\Category::class, \Itec\Category\Models\Category::class
        );

        $this->app->concord->registerModel(
            \Webkul\Category\Contracts\CategoryTranslation::class, \Itec\Category\Models\CategoryTranslation::class
        );
		
		$this->app->concord->registerModel(
            \Webkul\CMS\Contracts\CmsPage::class, \Itec\Category\Models\CmsPage::class
        );

    }

    /**
    * Register services.
    *
    * @return void
    */
    public function register()
    {

    }
}