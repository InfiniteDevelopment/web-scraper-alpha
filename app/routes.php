<?php

/**
 * Development log
 *
 *
 */


Route::group(array('prefix' => 'admin'), function() {

    Route::get('',      array('as' => 'admin.index', 'uses' => 'App\Controllers\Ui\UiBaseController@showHome'));
    Route::get('/fetch',array('as' => 'admin.fetch', 'uses' => 'App\Controllers\Ui\UiBaseController@fetch'));
    Route::get('/deleteByDate', array('uses' => 'App\Controllers\Ui\UiBaseController@deleteTvSlotByDate'));
});
