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
Route::get('flyer/{nombre}/{telefono}',"FlyerController@FlyerGenerate" )->name('flyer');
Route::get('flyer-pe/{nombre}/{telefono}',"FlyerController@FlyerPeGenerate" )->name('flyer-pe');
Route::get('flyer-pe-c/{nombre}/{telefono}',"FlyerController@FlyerPeCGenerate" )->name('flyer-pe-c');
