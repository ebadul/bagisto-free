<?php  

Route::group(['middleware' => ['admin']], function () {

    Route::get('admin/feedback', 'Buynoir\Feedback\Http\Controllers\FeedbackController@index')
        ->defaults('_config', ['view' => 'feedback_view::feedback.index'])
        ->name('admin.feedback.index');


});
	
?>