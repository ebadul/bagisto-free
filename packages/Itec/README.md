

### 3. Installation:

* Create a folder under packages directory name 'Itec'.
* Copy all modules here.
* Goto config/app.php file and add following line under 'providers'

~~~
Itec\Category\Providers\CategoryServiceProvider::class,
Itec\CategoryType\Providers\CategoryTypeServiceProvider::class,
Itec\Career\Providers\CareerServiceProvider::class,
~~~

* Goto config/concord.php file and add following line under 'modules'

~~~
\Itec\CategoryType\Providers\ModuleServiceProvider::class,
\Itec\Career\Providers\ModuleServiceProvider::class,
~~~

* Goto composer.json file and add following line under 'psr-4'

~~~
"Itec\\Category\\": "packages/Itec/Category/src",
"Itec\\CategoryType\\": "packages/Itec/CategoryType/src",
"Itec\\Career\\": "packages/Itec/Career/src"
~~~

* Run these commands below to complete the setup

~~~
composer dump-autoload
~~~

php artisan cache:clear
php artisan config:clear
php artisan view:clear
php artisan config:cache
php artisan view:cache
php artisan route:cache
composer dump-autoload
php artisan vendor:publish

-> Press 0 and then press enter to publish all assets and configurations.
~~~

php artisan migrate

> That's it, now just execute the project on your specified domain.
