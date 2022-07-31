<?php


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use Illuminate\Http\Request;

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

header('Content-Type: application/json; charset=UTF-8', true);


/** Start Auth Route **/


Route::middleware('auth:api')->group(function () {

});


Route::prefix('features')->group(function()
{
    Route::post('/add', 'ApiController@add');
    Route::post('/edit/{id}', 'ApiController@edit');
    Route::post('/delete/{id}', 'ApiController@delete');
    Route::get('/get', 'ApiController@get');

});

