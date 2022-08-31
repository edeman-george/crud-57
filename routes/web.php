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

Route::get('/friends/create/{id}', 'FriendsController@create', function ($id) {
    return $id;
})->name('friends.create');

//Route::get('/friends', function() {
//    \App\User::create([
//        'name' => '',
//        'age' => '',
//        'company' => '',
//    ]);
//});

//Route::get('/friends/create/{id}', function ($id) {
//    return $id;
////    return 'User '.$id;
//});

Route::post('shares', 'ShareController@store');
Route::resource('shares', 'ShareController');
Route::resource('users', 'UserController');
Route::get('user/{id}', 'UserController@show');
