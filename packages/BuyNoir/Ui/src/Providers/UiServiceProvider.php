<?php

namespace BuyNoir\Ui\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class UiServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';

        $this->publishes([
            __DIR__ . '/../../publishable/assets' => public_path('buynoir/ui/assets'),
        ], 'public');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'shopadmin_ui');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'shopadmin_ui');

        Paginator::defaultView('shopadmin_ui::partials.pagination');
        
        Paginator::defaultSimpleView('shopadmin_ui::partials.pagination');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('datagrid', 'BuyNoir\Ui\DataGrid\DataGrid');
    }
}
