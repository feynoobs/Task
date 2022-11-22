<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
Route::group(['middleware' => ['web'], 'namespace' => 'App\Http\Controllers'], function() {
    // Route::get('/', function () {
    //     return Inertia::render('welcome', [
    //         'greeting' => 'Hello'
    //     ]);
    // });
    Route::get('/login', 'DashboardController@login')->name('login');
    Route::group(['middleware' => ['auth:sanctum']], function() {
        Route::get('/', 'DashboardController@index')->name('dashboard.index');
        // Route::get('/fuga', function () {
        //     return Inertia::render('fuga');
        // })->name('fuga');
    });
});
