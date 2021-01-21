<?php 

namespace RootNext\AboutUs\Providers;

 use Illuminate\Support\ServiceProvider;
 use Illuminate\Support\Facades\Event;

 
 class AboutUsServiceProvider extends ServiceProvider
 {
     /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
		  $this->loadRoutesFrom(__DIR__ . '/../Http/routes.php');
          $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'aboutus_view');
          $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'aboutus_lang');
          //$this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');

     }

     /**
     * Register services.
     *
     * @return void
     */
     public function register()
     {
          $this->mergeConfigFrom(dirname(__DIR__) . '/Config/menu.php', 'menu.admin');
          $this->mergeConfigFrom(dirname(__DIR__) . '/Config/acl.php', 'acl');
     }
 }