<?php

use Illuminate\Support\Facades\Route;

Route::namespace('Front')->group(function(){

//index Home Page
Route::get('/', 'HomePageController@index')->name('homepage');

Route::prefix('/properties')->group(function(){
    //All Properties
    Route::get('/','PropController@allProperties')->name('allProperties');
    //create new property
    Route::get('/create','PropController@createProp')->name('createProp');
});
//All property in each country
Route::prefix('/country')->group(function(){
    Route::get('/{id}','PropController@countryProp')->name('countryProperty');
    Route::get('/{id}/{p_id}','PropController@singleProperty')->name('singleProperty');
});

//All Property in each Category
Route::prefix('/category')->group(function(){
    Route::get('/{id}','PropController@catProp')->name('catProp');
    Route::get('/{id}/{P_id}','PropController@catpropSingle')->name('catpropSingle');
});
//user Moduel
Route::prefix('/users')->group(function(){
    Route::get('/login','UserController@login')->name('user.login');
    Route::post('/handleLogin','UserController@handleLogin')->name('user.handleLogin');
    Route::get('/register','UserController@register')->name('user.register');
    Route::post('/handleRegister','UserController@handleRegister')->name('user.handleRegister');
    Route::get('/logout','UserController@logout')->name('user.Logout');  
});

//Agencies View
Route::get('/agencies','AgencyController@showAgencies')->name('showAgencies');

//Agents View
Route::get('/agents','AgentController@showAgents')->name('showAgents');

//contact view
Route::get('/contact','ContactController@showContact')->name('contact');

//subscribe url
Route::post('/subscribe','ContactController@contactSubscribe')->name('subscribe');
Route::post('/sendMessage','ContactController@sendMessage')->name('sendMessage');
});

//Admin 
Route::namespace('Admin')->prefix('/dashboard')->group(function(){
    //admin login
Route::get('/login','AuthController@loginview')->name('admin.loginview');
Route::post('/login','AuthController@login')->name('admin.login');

Route::middleware('admin')->group(function(){
    Route::get('/logout','AuthController@logout')->name('admin.logout');
    //admin dashboard
    Route::get('/','HomePageController@index')->name('admin.index');

    //Category Crud
    Route::prefix('/cats')->group(function(){
    //show all category for admin
    Route::get('/','CategoryController@index')->name('adminCats.index');
    //create new category
    Route::get('/create','CategoryController@create')->name('adminCats.create');
    Route::post('/store','CategoryController@store')->name('adminCats.store');
    //update one category
    Route::get('/edit/{id}','CategoryController@edit')->name('adminCats.edit');
    Route::post('/update/{id}','CategoryController@update')->name('adminCats.update');
    //Delete Category
    Route::get('/delete/{id}','CategoryController@delete')->name('adminCats.delete');
    });

    //Route::resources('cities','LocationController'); 
    //Category Crud
    Route::prefix('/cities')->group(function(){
        //show all category for admin
        Route::get('/','LocationController@index')->name('adminLocations.index');
        //create new category
        Route::get('/create','LocationController@create')->name('adminLocations.create');
        Route::post('/store','LocationController@store')->name('adminLocations.store');
        //update one category
        Route::get('/edit/{id}','LocationController@edit')->name('adminLocations.edit');
        Route::post('/update/{id}','LocationController@update')->name('adminLocations.update');
        //Delete Category
        Route::get('/delete/{id}','LocationController@delete')->name('adminLocations.delete');
        });


});


});

