<?php 

namespace Sellnoir\Profile\Providers;

 use Illuminate\Support\ServiceProvider;
 use Illuminate\Support\Facades\Event;

 
 class ProfileServiceProvider extends ServiceProvider
 {
     /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
          include __DIR__ . '/../Http/routes.php';
          $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'profile_view');
          $this->loadTranslationsFrom(__DIR__ . '/../Resources/lang', 'profile_lang');
          $this->loadMigrationsFrom(__DIR__ .'/../Database/Migrations');

     }

     /**
     * Register services.
     *
     * @return void
     */
     public function register()
     {
          $this->mergeConfigFrom(dirname(__DIR__) . '/../Config/menu.php', 'menu.admin');
          $this->mergeConfigFrom(dirname(__DIR__) . '/../Config/acl.php', 'acl');
     }
 }