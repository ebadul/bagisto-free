<?php


Route::group(['middleware' => ['admin']], function () {

  
    Route::get('admin/profiles', 'Sellnoir\Profile\Http\Controllers\ProfileController@index')
        ->defaults('_config', ['view' => 'profile_view::profile.index'])
        ->name('admin.profile.indexs');
       

    Route::get('admin/career/view/{id}', 'Itec\Career\Http\Controllers\CareerController@view')
        ->defaults('_config', ['view' => 'career_view::career.view'])
        ->name('admin.career.view');




    Route::get('admin/career/create', 'Itec\Career\Http\Controllers\CareerController@create')
        ->defaults('_config', ['view' => 'career_view::career.create'])
        ->name('admin.career.create');

    Route::post('admin/career/store', 'Itec\Career\Http\Controllers\CareerController@store')
        ->defaults('_config', ['redirect' => 'admin.career.index'])
        ->name('admin.career.store');

    Route::get('admin/career/edit/{id}', 'Itec\Career\Http\Controllers\CareerController@edit')
        ->defaults('_config', ['view' => 'career_view::career.edit'])
        ->name('admin.career.edit');

    Route::post('admin/career/update', 'Itec\Career\Http\Controllers\CareerController@update')
        ->defaults('_config', ['redirect' => 'admin.career.index'])
        ->name('admin.career.update');



    Route::post('admin/career/delete/{id}', 'Itec\Career\Http\Controllers\CareerController@destroy')
        ->name('admin.career.delete');




});



Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

// Registration Routes
    
    Route::get('/career', 'Itec\Career\Http\Controllers\CareerController@show')
    		->defaults('_config', ['view' => 'career_view::career.shop.index'])
    		->name('shop.career.index');
    
    

    Route::get('/career/view/{id}', 'Itec\Career\Http\Controllers\CareerController@shopview')
        ->defaults('_config', ['view' => 'career_view::career.shop.view'])
        ->name('shop.career.view');




});