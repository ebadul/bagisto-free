<?php

//CategoryToute  

Route::group(['middleware' => ['admin']], function () {

    //CategoryType Index
    Route::get('admin/catalog/category/type', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@index')
        ->defaults('_config', ['view' => 'category_type_view::category_type.index'])
        ->name('category.type.index');
    //CategoryType Create
    Route::get('admin/catalog/category/type/create', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@create')
        ->defaults('_config', ['view' => 'category_type_view::category_type.create'])
        ->name('category.type.create');


    //CategoryType Store
    Route::post('admin/catalog/category/type/store', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@store')
        ->defaults('_config', ['view' => 'category_type_view::category_type.index'])
        ->name('category.type.store');


    //CategoryType Edit
    Route::get('admin/catalog/category/type/edit/{id}', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@edit')
        ->defaults('_config', ['view' => 'category_type_view::category_type.edit'])
        ->name('category.type.edit');


    //CategoryType Update
     Route::put('admin/catalog/category/type/edit/{id}', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@update')
        ->defaults('_config', ['redirect' => 'category_type_view::category_type.index'])
        ->name('category.type.update');


    //CategoryType Delete
    Route::post('admin/catalog/category/type/delete/{id}', 'Itec\CategoryType\Http\Controllers\CategoryTypeController@destroy')->name('category.type.delete');

});