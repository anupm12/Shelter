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

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => 'web','middleware' => 'auth'], function() {
    Route::get('/owner', [
        'uses' => 'OwnersController@index',
        'as' => 'owner'
    ]);


    Route::post('/owner/store', [
        'uses'=>'OwnersController@store',
        'as'=>'owner.store'
    ]);


    Route::get('/index', [
        'uses' => 'DisplayController@index',
        'as' => 'index'
    ]);


    Route::get('/single/{id}', [
        'uses' => 'DisplayController@single',
        'as' => 'single'
    ]);


    Route::get('/editprofile{id}', [
        'uses' => 'OwnersController@edit',
        'as' => 'editprofile'
    ]);


    Route::get('/editprofile/update{id}', [
        'uses' => 'OwnersController@update',
        'as' => 'editprofile.update'
    ]);


});

Route::get('/home', 'HomeController@index')->name('home');





