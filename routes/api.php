<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/index", "App\Http\Controllers\Controller@index");

Route::group([
    'middleware' => 'api',
    'namespace' => 'App\Http\Controllers',
    'prefix' => 'auth'

], function ($router) {
    Route::post('/login','AuthController@login');
    Route::post('/register', 'AuthController@register');
    Route::post('/logout', 'AuthController@logout');
    Route::post('/refresh', 'AuthController@refresh');
    Route::get('/profile', 'AuthController@profile');    
});

Route::group(['middleware' => 'api','namespace' => 'App\Http\Controllers',], function ($router) {

    // Category
    Route::get('/categorys','CategoryController@index');

    Route::post('/category','CategoryController@store');
    
    Route::get('/categorys/{id}','CategoryController@show');
    
    Route::put('/categorys/{id}','CategoryController@update');
    
    Route::delete('/categorys/{id}','CategoryController@destroy');

    //Product
    Route::get('/products','ProductController@index');

    Route::post('/product','ProductController@store');
    
    Route::get('/products/{id}','ProductController@show');
    
    Route::put('/products/{id}','ProductController@update');
    
    Route::delete('/products/{id}','ProductController@destroy');

    //Combo
    Route::get('/combos','ComboController@index');

    Route::post('/combo','ComboController@store');
     
    Route::get('/combos/{id}','ComboController@show');
     
    Route::put('/combos/{id}','ComboController@update');
     
     Route::delete('/combos/{id}','ComboController@destroy');

     
    //Option
    Route::get('/options','OptionController@index');

    Route::post('/option','OptionController@store');
      
    Route::get('/options/{id}','OptionController@show');
      
    Route::put('/options/{id}','OptionController@update');
      
    Route::delete('/options/{id}','OptionController@destroy');

    //Reward
    Route::get('/rewards','OptionController@index');

    Route::post('/reward','OptionController@store');
        
    Route::get('/rewards/{id}','OptionController@show');
        
    Route::put('/rewards/{id}','OptionController@update');
        
    Route::delete('/rewards/{id}','OptionController@destroy');

    //Staff
    Route::get('/staffs','StaffController@index');

    Route::post('/staff','StaffController@store');
         
    Route::get('/staffs/{id}','StaffController@show');
         
    Route::put('/staffs/{id}','StaffController@update');
         
    Route::delete('/staffs/{id}','StaffController@destroy');


    //ComboDetail
    Route::get('/combo_details','ComboDetailController@index');

    Route::post('/combo_detail','ComboDetailController@store');
         
    Route::get('/combo_details/{id}','ComboDetailController@show');
         
    Route::put('/combo_details/{id}','ComboDetailController@update');
         
    Route::delete('/combo_details/{id}','ComboDetailController@destroy');
    
});
