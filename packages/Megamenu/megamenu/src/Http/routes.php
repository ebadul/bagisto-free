<?php  

Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/megamenu', 'Megamenu\megamenu\Http\Controllers\MegamenuController@index')
        ->defaults('_config', ['view' => 'megamenu_view::megamenu.index'])
        ->name('admin.megamenu.index');


});
	
?>