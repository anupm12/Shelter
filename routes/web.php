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

Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
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


    Route::get('/editadvertisement{id}', [
        'uses' => 'OwnersController@edit',
        'as' => 'editadvertisement'
    ]);


    Route::get('/editadvertisement/update{id}', [
        'uses' => 'OwnersController@update',
        'as' => 'editadvertisement.update'
    ]);

    
    Route::get('/viewprofile/{id}', [
        'uses' => 'ViewprofileController@index',
        'as' => 'viewprofile'
    ]);

});

Route::get('/home', 'HomeController@index')->name('home');

    
