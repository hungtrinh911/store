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

// Route::get('/{any}', function () {
//   return view('post');
// })->where('any', '.*');

// Route::get('/index', function() {
// 	return view('index');
// });

Route::get('/extent', function() {
	return view('extent');
});

Route::get('index', function() {
	return view('fontEnd.index.index');
});