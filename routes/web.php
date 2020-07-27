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

Route::get('/', 'siswacontroller@index');
Route::get('/siswa/create', 'siswacontroller@create');
Route::post('/siswas', 'siswacontroller@store');
Route::get('/siswas/{id}/edit', 'siswacontroller@edit');
Route::patch('/siswas/{id}', 'siswacontroller@update');
Route::delete('/siswas/{id}', 'siswacontroller@destroy');
