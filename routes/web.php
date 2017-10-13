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

Route::middleware('auth')->get('/chat', function () {
    return view('chat');
});

Route::middleware('auth')->get('/messages', function() {
    return App\Message::with('user')->get();
});

Route::middleware('auth')->post('/messages', function() {
    //Store the new messsage
    $user = Auth::user();

    $user->messages()->create([
        'message' => request()->get('message')
    ]);

    return response()->json(['status'=>'OK'],201);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
