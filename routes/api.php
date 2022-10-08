<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->post('/dir', 'App\Http\Controllers\RecordController@createDir');
Route::middleware('auth:sanctum')->get('/dirs', 'App\Http\Controllers\RecordController@listDirs');
Route::middleware('auth:sanctum')->post('/{dir_name}/record', 'App\Http\Controllers\RecordController@uploadRecordToDir');
Route::middleware('auth:sanctum')->get('/{dir_name}/records', 'App\Http\Controllers\RecordController@listRecordsInDir');
