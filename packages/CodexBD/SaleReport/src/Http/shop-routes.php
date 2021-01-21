<?php

Route::group(['middleware' => ['web', 'locale', 'theme', 'currency']], function () {

    Route::get('/salereport', 'CodexBD\SaleReport\Http\Controllers\SaleReportController@show')
    ->defaults('_config', ['view' => 'salereport_view::shop.index'])
    ->name('shop.salereport.index');
});