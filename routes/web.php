<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/dir', 'App\Http\Controllers\RecordController@createDir');
Route::get('/dirs', 'App\Http\Controllers\RecordController@listDirs');
Route::post('/{dir_name}/record', 'App\Http\Controllers\RecordController@uploadRecordToDir');
Route::get('/{dir_name}/records', 'App\Http\Controllers\RecordController@listRecordsInDir');
