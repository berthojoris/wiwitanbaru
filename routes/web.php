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

Route::get('/', 'RegisterController@index')->name('index');
Route::get('/admin/view', 'RegisterController@viewDb')->name('view_data');
Route::get('/admin/download-ijazah/{fileName}', 'RegisterController@downloadIjazah')->name('download_ijazah');
Route::get('/admin/download-essay/{fileName}', 'RegisterController@downloadEssay')->name('download_essay');
Route::post('/register', 'RegisterController@submit')->name('register_submit');