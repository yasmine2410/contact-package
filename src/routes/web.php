<?php
/**
 * Created by PhpStorm.
 * User: Yasmeen
 * Date: 10/1/2019
 * Time: 10:30 AM
 */

Route::group(['namespace' => 'Yasmine\Contact\Http\Controllers'], function () {
    Route::get('contact' , 'ContactController@index')->name('contact');
    Route::post('contact' , 'ContactController@send');
});

