<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//Route::post('/dir', 'App\Http\Controllers\RecordController@createDir');
//Route::get('/dirs', 'App\Http\Controllers\RecordController@listDirs');
//Route::post('/{dir_name}/record', 'App\Http\Controllers\RecordController@uploadRecordToDir');
//Route::get('/{dir_name}/records', 'App\Http\Controllers\RecordController@listRecordsInDir');
