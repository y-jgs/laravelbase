<?php

Route::group(['middleware' => 'web', 'prefix' => 'zhou', 'namespace' => 'App\\Modules\Zhou\Http\Controllers'], function()
{
    Route::get('/', 'ZhouController@index');
});
