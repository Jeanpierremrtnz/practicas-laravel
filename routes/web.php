<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'api'], function () {
    Route::get('/documentation', '\L5Swagger\Http\Controllers\SwaggerController@api')->name('l5-swagger.default.api');
    Route::get('/docs', '\L5Swagger\Http\Controllers\SwaggerController@docs')->name('l5-swagger.default.docs');
});