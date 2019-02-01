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

Route::get('/', 'PagesController@index');


// Route::get('/hello', function () {
//     return "<h1> Hello World!! theres dfd";
// });

// Route::get('/users/{id}', function ($id) {
//     return "this is user ". $id;
// });


//Router for about page
Route::get('/about', 'PagesController@about');

//Route for services page
Route::get('/services', 'PagesController@services');




