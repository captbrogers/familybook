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

Route::get('/fire', function () {
    event(new \App\Events\NewPostEvent('your new message'));
    return response()->json('Event fired');
});

Route::post('/fire', function () {
    $message = request()->input('message');
    event(new \App\Events\NewPostEvent('your new message'));
    return response()->json('"Event fired" <- message from server');
});

Auth::routes();

Route::group([
    'middleware' => 'auth',
], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    Route::post('/posts/new', 'PostsController@store');

    Route::get('/settings', 'UserController@show')->name('settings');
});
