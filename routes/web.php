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

Route::get('/home-sample-1', function() {
    return view('preview/sample_index_1');
});

Route::get('/home-sample-2', function() {
    return view('preview/sample_index_2');
});





// DASHBOARD
Route::get('/dashboard-admin', function() {
    return view('dashboard/index');
});
Route::get('/administrator/admin', function() {
    return view('dashboard/basic_table');
});
Route::get('/dashboard-admin/login', function() {
    return view('dashboard/login');
});
Route::get('/dashboard-admin/register', function() {
    return view('dashboard/register');
});