<?php

Route::group(['middleware' => ['web']], function () {
    Route::prefix('admin')->group(function () {

        Route::group(['middleware' => ['admin']], function () {
            
            Route::prefix('catalog')->group(function () {

                Route::get('/categories', 'Itec\Category\Http\Controllers\CategoryController@index')->defaults('_config', [
                    'view' => 'category_view::catalog.categories.index'
                ])->name('admin.catalog.categories.index');

                Route::get('/categories/create', 'Itec\Category\Http\Controllers\CategoryController@create')->defaults('_config', [
                    'view' => 'category_view::catalog.categories.create'
                ])->name('admin.catalog.categories.create');

                Route::post('/categories/create', 'Itec\Category\Http\Controllers\CategoryController@store')->defaults('_config', [
                    'redirect' => 'admin.catalog.categories.index'
                ])->name('admin.catalog.categories.store');

                Route::get('/categories/edit/{id}', 'Itec\Category\Http\Controllers\CategoryController@edit')->defaults('_config', [
                    'view' => 'category_view::catalog.categories.edit'
                ])->name('admin.catalog.categories.edit');

                Route::put('/categories/edit/{id}', 'Itec\Category\Http\Controllers\CategoryController@update')->defaults('_config', [
                    'redirect' => 'admin.catalog.categories.index'
                ])->name('admin.catalog.categories.update');

                Route::post('/categories/delete/{id}', 'Itec\Category\Http\Controllers\CategoryController@destroy')->name('admin.catalog.categories.delete');








                Route::post('categories/massaction', 'Itec\Category\Http\Controllers\CategoryController@massActionHandler')->name('admin.catalog.categories.massaction');

                //product massdelete
                Route::post('categories/massdelete', 'Itec\Category\Http\Controllers\CategoryController@massDestroy')->defaults('_config', [
                    'redirect' => 'admin.catalog.categories.index'
                ])->name('admin.catalog.categories.massdelete');
                
            });
		});
        
		Route::prefix('cms')->group(function () {
                Route::get('/', 'Itec\Category\Http\Controllers\CmsPageController@index')->defaults('_config', [
                    'view' => 'category_view::cms.index',
                ])->name('admin.cms.index');
        });
		

    });
});



Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

    // Route::get('/categories', 'Itec\Category\Http\Controllers\ShopCategoryController@show')
    //     ->defaults('_config', ['view' => 'shop::products.show'])
    //     ->name('shop.categories.show');

});