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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', ['uses' => 'PagesController@index']);

Route::get('/users', ['uses' => 'UsersController@index']);
Route::get('/users/create', ['uses' => 'UsersController@create']);
Route::post('users', ['uses' => 'UsersController@store']);
/*
Route::get('/users', function () {
    $users = [
        '0' => [
            'first_name' => 'Pontus',
            'last_name' => 'Johansson',
            'location' => 'Sweden'
        ],
        '1' => [
            'first_name' => 'Bill',
            'last_name' => 'Gates',
            'location' => 'USA'
        ]
    ];
    return $users;
});
*/

Auth::routes();

Route::get('/home', 'HomeController@index');
