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

$router->group([], function () use ($router) {
    $router->post('/dir', 'RecordController@createDir');
    $router->get('/dirs', 'RecordController@listDirs');
    $router->delete('/dir', 'RecordController@deleteDir');
    $router->post('/{dir_name}/record', 'RecordController@uploadRecordToDir');
    $router->get('/{dir_name}/records', 'RecordController@listRecordsInDir');
    $router->delete('/{dir_name}/record', 'RecordController@deleteRecordInDir');
});
