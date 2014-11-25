<?php

/**
 * Development log
 *
 * TASKS:
 *      enable delete of previous TvSlots before fetching new ones.
 *          if possible, try to pass date as parameter (delete
 *
 */


Route::group(array('prefix' => 'admin'), function() {

    //Temp routes
    Route::get('/testInfoLog', array('uses' => 'App\Controllers\Ui\UiBaseController@loggerInfoTesting'));

    //Routes that will stay in project for a while
    Route::get('',      array('as' => 'admin.index', 'uses' => 'App\Controllers\Ui\UiBaseController@showHome'));
    Route::get('/fetch',array('as' => 'admin.fetch', 'uses' => 'App\Controllers\Ui\UiBaseController@fetch'));
    Route::get('/deleteByDate', array('uses' => 'App\Controllers\Ui\UiBaseController@deleteTvSlotByDate'));
});
