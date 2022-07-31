<?php

Route::post('/admin/login', 'AuthController@login')->name('admin.login');
Route::get('/testPdf', 'UserController@pdf')->name('testPdf');

Route::prefix('Admin')->group(function () {

});

