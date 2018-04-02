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
    return view('pages/index')->with(['page' => 'index']); 
});
Route::get('/articles', function(){
	return view('pages/articles')->with(['page' => 'articles']);
});
Route::get('/article', function(){
	return view('pages/article')->with(['page' => 'articles']);
});
Route::get('/aboutus', function(){
	return view('pages/aboutus')->with(['page' => 'aboutus']);
});
Route::get('/chat', function(){
	return view('pages/chat')->with(['page' => 'chat']);
});
Route::get('/register', function(){
	return view('pages/register')->with(['page' => 'register']);
});
Route::post('/register', 'AccountController@storeUser');

Route::post('/chat/save-message', 'AccountController@saveChatMessage');

Route::get('/chat/get-messages', 'AccountController@getChatMessages');