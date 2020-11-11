<?php

use Illuminate\Support\Facades\Route;


$prefix = config('myfanap.prefix');

Route::group(['namespace' => 'Dev\Fanap\Controllers', 'prefix' => $prefix], function () {
    Route::get('/', 'FanapController@lists');
});
