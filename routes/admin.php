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

    // $data=[];
    // $data['id']=5;
    // $data['name']='doha essa';


    // return view('welcome', $data) ;
    // ->with(['string'=>'doha essa','age'=>'32']);
});

// Route::get('/admin', function () {
//     return 'admin';
// });

Route::get('/show-number/{id}', function ($id) {
    return $id;
})->name('a');

Route::get('/show-string/{id?}', function () {
    return 'welcome';
})->name('b');

// Route::namespace('Front')->group(function(){

//     Route::get('users','UserController@showAdminName');

// });

// Route::group(['prefix' => 'users','middleware'=>('auth')], function () {

//     Route::get('/',function(){
//         return 'work';
//     });

//     Route::get('show','UserController@showUserName');
//     Route::delete('delete','UserController@showUserName');
//     Route::get('edit','UserController@showUserName');
//     Route::put('update','UserController@showUserName');
    
// });

// Route::get('check',function(){
//     return 'middleware';
// })->middleware('auth');

// Route::get('second','Admin\SecondController@showString');

// Route::group(['namespace' => 'Admin'], function () {

//     Route::get('second','SecondController@showString0')->middleware('auth');
//     Route::get('second1','SecondController@showString1');
//     Route::get('second2','SecondController@showString2');
//     Route::get('second3','SecondController@showString3');       
//     });

//     Route::get('login',function(){
//         return 'must be login';
//     })->name('login');

    Route::resource('news', 'NewsController');

    Route::get('index', 'Front\UserController@getIndex');

    Route::get('/landing', function () {

        return view('landing');

    });

    Route::get('/about', function () {

        return view('about');

    });
    