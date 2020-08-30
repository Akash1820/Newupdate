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

use Facade\FlareClient\View;

Route::get('/',function(){
    return View('f_chat');
});
Route::get('/home',function(){
    return View('f_chat');
});
// Route::get('track_detail','Controller@track_data');
Route::post('track_detail','Controller@track_data');

Route::get('track',
	function(){
	return View('alert');
});
Route::post('track',function(){
	return view('alert');
});
Route::post('contact','Controller@contact');
Route::get('mail',
	function(){
	return view('contact');
});
Route::get('annon',
	function(){
	return view('anno');
});
Route::get('form',
	function(){
	return view('form');
});
Route::post('sendQuery','Controller@contact');
Route::post('annonSubmit','HandleRequests@annoSubmit');
Route::get('annonSubmit','HandleRequests@annoSubmit');
Route::post('insertSubmit','HandleRequests@insertSubmit');
