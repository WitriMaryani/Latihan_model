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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/testmodel', function () {
    $query = App\post::all();
    return $query;
});

Route::get('/testmodel1', function () {
    $query = App\Member::all();
    return $query;
});

Route::get('/testmodel2', function () {
    $query = App\Siswa::all();
    return $query;
});

Route::get('/about', function () {
    return view ('about');
});

Route::get('/tugas', function () {
    return view ('kata');
});

Route::get('/tugas1', function () {
    return view ('sambutan');
});
