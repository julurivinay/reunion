<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'ReunionController@home');
Route::get('basic-info', 'ReunionController@basicInfo');
Route::post('basic-info', 'ReunionController@savebasicInfo');
Route::post('acceptance', function () {
    return view('acceptance');
});
