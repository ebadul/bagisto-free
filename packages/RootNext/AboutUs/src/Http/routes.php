<?php


Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/aboutus', 'RootNext\AboutUs\Http\Controllers\AboutUsController@index')
        ->defaults('_config', ['view' => 'aboutus_view::aboutus.index'])
        ->name('admin.aboutus.index');

    Route::get('admin/aboutus/second', 'RootNext\AboutUs\Http\Controllers\AboutUsController@second')
        ->defaults('_config', ['view' => 'aboutus_view::aboutus.second'])
        ->name('admin.aboutus.second');

});
?>