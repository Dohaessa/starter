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

// Route::get('/test1', function () {
//     return 'welcome';
// });

// Route::get('/show-number/{id}', function ($id) {
//     return $id;
// })->name('c');

// Route::get('/show-string/{id?}', function () {
//     return 'welcome';
// })->name('d');

// Route::get('second','admin\SecondController@showString');


Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
