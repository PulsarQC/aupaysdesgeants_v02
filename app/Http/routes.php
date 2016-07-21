<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', function () {
 //   return view('welcome');
//});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
    Route::post('/', 'EmailController@store');
    Route::get('/register', 'AccueilController@index');
    Route::get('/password/reset', 'AccueilController@index');
    Route::get('/', 'AccueilController@index');
    
    Route::group(['middleware' => 'auth'], function() {
        Route::get('/edit', 'AccueilController@edit');
        Route::put('/update', 'AccueilController@update');
    });
    Route::group(['prefix' => 'contact'], function() {
        Route::get('/', 'ContactController@index');
    });
    Route::group(['middleware' => 'auth', 'prefix' => 'contact'], function() {
        Route::get('/edit', 'ContactController@edit');
        Route::put('/update', 'ContactController@update');
    });
    Route::group(['prefix' => 'histoire'], function() {
        Route::get('/', 'HistoireController@index');
    });
    Route::group(['middleware' => 'auth', 'prefix' => 'histoire'], function() {
        Route::get('/edit', 'HistoireController@edit');
        Route::put('/update', 'HistoireController@update');
    });
    
    Route::group(['middleware' => 'auth', 'prefix' => 'images'], function() {
        Route::get('/', 'ImagesController@index');
        Route::post('/', 'ImagesController@upload');
    });

    Route::group(['prefix' => 'char', 'where' => ['char'=>'[0-9]+']], function () {
        Route::get('/', 'CharsController@index');
        Route::get('/{char}', 'CharsController@show');
    });    
    Route::group(['middleware' => 'auth', 'prefix' => 'char', 'where' => ['char'=>'[0-9]+']], function () {
        Route::get('/{char}/edit', 'CharsController@edit');
        Route::get('/create', 'CharsController@create');
        Route::put('/{char}/update', 'CharsController@update');
        Route::post('/store', 'CharsController@store');
        Route::delete('/{char}/delete', 'CharsController@destroy');
    });    
    
    Route::group(['prefix' => 'marionnette', 'where' => ['marionnette'=>'[0-9]+']], function () {    
        Route::get('/', 'MarionnettesController@index');
        Route::get('/{marionnette}', 'MarionnettesController@show');
    });   
    Route::group(['middleware' => 'auth', 'prefix' => 'marionnette', 'where' => ['marionnette'=>'[0-9]+']], function () {    
        Route::get('/{marionnette}/edit', 'MarionnettesController@edit');
        Route::get('/create', 'MarionnettesController@create');
        Route::put('/{marionnette}/update', 'MarionnettesController@update');
        Route::post('/store', 'MarionnettesController@store');
        Route::delete('/{marionnette}/delete', 'MarionnettesController@destroy');
    });   
    
    Route::group(['prefix' => 'geant', 'where' => ['geant'=>'[0-9]+']], function () {    
        Route::get('/', 'GeantsController@index');
        Route::get('/{geant}', 'GeantsController@show');
    });
    Route::group(['middleware' => 'auth', 'prefix' => 'geant', 'where' => ['geant'=>'[0-9]+']], function () {    
        Route::get('/{geant}/edit', 'GeantsController@edit');
        Route::get('/create', 'GeantsController@create');
        Route::put('/{geant}/update', 'GeantsController@update');
        Route::post('/store', 'GeantsController@store');
        Route::delete('/{geant}/delete', 'GeantsController@destroy');
    });
    
    Route::group(['prefix' => 'costume', 'where' => ['costume'=>'[0-9]+']], function () {    
        Route::get('/', 'CostumesController@index');
        Route::get('/{costume}', 'CostumesController@show');
    });
    
    Route::group(['middleware' => 'auth', 'prefix' => 'costume', 'where' => ['costume'=>'[0-9]+']], function () {    
        Route::get('/{costume}/edit', 'CostumesController@edit');
        Route::get('/create', 'CostumesController@create');
        Route::put('/{costume}/update', 'CostumesController@update');
        Route::post('/store', 'CostumesController@store');
        Route::delete('/{costume}/delete', 'CostumesController@destroy');
    });
    
});
