<?php

namespace BuyNoir\ShopAdmin\Providers;

use Illuminate\Support\ServiceProvider;
use Webkul\Core\Tree;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');

        $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'admin');
        $this->publishes([__DIR__.'/../Resources/lang' => resource_path('lang/vendor/buynoir/admin')]);

        $this->publishes([
            __DIR__ . '/../Resources/assets' => public_path('buynoir/shopadmin/assets'),
        ], 'public');

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'shopadmin_view');

        $this->composeView();

        $this->registerACL();

        $this->app->register(EventServiceProvider::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConfig();
    }

    /**
     * Bind the the data to the views
     *
     * @return void
     */
    protected function composeView()
    {
        view()->composer(['shopadmin_view::shopadmin.layouts.nav-left', 'shopadmin_view::shopadmin.layouts.nav-aside', 'shopadmin_view::shopadmin.layouts.tabs'], function ($view) {
            $tree = Tree::create();

            $permissionType = auth()->guard('admin')->user()->role->permission_type;
            $allowedPermissions = auth()->guard('admin')->user()->role->permissions;

            foreach (config('menu.shopadmin') as $index => $item) {
                if (! bouncer()->hasPermission($item['key'])) {
                    continue;
                }

                if ($index + 1 < count(config('menu.shopadmin')) && $permissionType != 'all') {
                    $permission = config('menu.shopadmin')[$index + 1];

                    if (substr_count($permission['key'], '.') == 2 && substr_count($item['key'], '.') == 1) {
                        foreach ($allowedPermissions as $key => $value) {
                            if ($item['key'] == $value) {
                                $neededItem = $allowedPermissions[$key + 1];

                                foreach (config('menu.shopadmin') as $key1 => $findMatced) {
                                    if ($findMatced['key'] == $neededItem) {
                                        $item['route'] = $findMatced['route'];
                                    }
                                }
                            }
                        }
                    }
                }

                $tree->add($item, 'menu');
            }

            $tree->items = core()->sortItems($tree->items);

            $view->with('menu', $tree);
        });

        view()->composer(['admin::users.roles.create', 'admin::users.roles.edit'], function ($view) {
            $view->with('acl', $this->createACL());
        });

        view()->composer(['admin::catalog.products.create'], function ($view) {
            $items = array();

            foreach (config('product_types') as $item) {
                $item['children'] = [];

                array_push($items, $item);
            }

            $types = core()->sortItems($items);

            $view->with('productTypes', $types);
        });
    }

    /**
     * Registers acl to entire application
     *
     * @return void
     */
    public function registerACL()
    {
        $this->app->singleton('acl', function () {
            return $this->createACL();
        });
    }

    /**
     * Create acl tree
     *
     * @return mixed
     */
    public function createACL()
    {
        static $tree;

        if ($tree) {
            return $tree;
        }

        $tree = Tree::create();

        foreach (config('acl') as $item) {
            $tree->add($item, 'acl');
        }

        $tree->items = core()->sortItems($tree->items);

        return $tree;
    }

    /**
     * Register package config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/menu.php', 'menu.shopadmin'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/acl.php', 'acl'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );
    }
}
