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
// Route::get("hello","HelloController@index");
// Route::post("hello","HelloController@post");

// Route::get("person","PersonController@index");
// Route::get("person/find","PersonController@find");
// Route::post("person/find","PersonController@search");
// Route::get("person/add","PersonController@add");
// Route::post("person/add","PersonController@create");

// Route::get("board","BoardController@index");
// Route::get("board/add","BoardController@add");
// Route::post("board/add","BoardController@create");

// Route::resource("rest","RestappController");
// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/{any}', function() {
    return view('spa.layouts');
})->where('any', '.*');