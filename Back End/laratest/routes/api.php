<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Controller\EmployeeController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/jobs', 'JobController@index');
Route::post('/jobs', 'JobController@create');

Route::get('/employee', 'EmployeeController@create');
Route::post('/employee', 'EmployeeController@create');
Route::get('/employeelist', 'EmployeeController@list');

