<?php


Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/index', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@index')
        ->defaults('_config', ['view' => 'salereport_view::admin.index'])
        ->name('admin.salereport.index');

    Route::get('admin/salereport/view/{id}', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@view')
        ->defaults('_config', ['view' => 'salereport_view::admin.view'])
        ->name('admin.salereport.view');

    Route::get('admin/create', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@create')
        ->defaults('_config', ['view' => 'salereport_view::admin.create'])
        ->name('admin.salereport.create');
		
	Route::post('admin/salereport/update', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@update')
        ->defaults('_config', ['redirect' => 'admin.salereport.index'])
        ->name('admin.salereport.update');
	
	Route::get('admin/redirect', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@index')
        ->defaults('_config', ['redirect' => 'admin.salereport.index'])
        ->name('admin.salereport.redirect');
		
		
	Route::post('admin/store', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@store')
        ->defaults('_config', ['view' => 'salereport_view::admin.view'])
        ->name('admin.salereport.store');

        Route::get('admin/salereport/edit/{id}', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@edit')
        ->defaults('_config', ['view' => 'salereport_view::admin.edit'])
        ->name('admin.salereport.edit');

        Route::post('admin/salereport/delete/{id}', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@destroy')
        ->name('admin.salereport.delete');

});
?>