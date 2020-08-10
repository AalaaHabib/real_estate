<?php

use Illuminate\Support\Facades\Route;

/*-----------------------Peter's Routes----------------------------*/
Route::get('profile','Front\UserController@profile')->name('my.profile');
Route::resource('property','Front\PropController')->except("create");
Route::get('properties/','Front\PropController@allProperties')->name('allProperties');
Route::get('property/create','Front\PropController@create')->name("createProp");




/*-------------------End Peter's Routes----------------------------*/


Route::namespace('Front')->group(function(){

//index Home Page
Route::get('/', 'HomePageController@index')->name('homepage');

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
  
    //Message Operation
    Route::prefix('/message')->group(function(){
        //show all Message for admin
        Route::get('/','MessageController@index')->name('adminMessage.index');
        //show each one 
        Route::get('/{id}','MessageController@show')->name('admin.showMess');
        Route::get('/delete/{id}','MessageController@delete')->name('admin.deleteMess');
         });
    
    Route::prefix('/peoperties')->group(function(){
        //show all Properties for admin
        Route::get('/','PropertiesController@index')->name('adminProp.index');
        Route::get('/show/{id}','PropertiesController@show')->name('adminProp.show');
        Route::get('/delete/{id}','PropertiesController@delete')->name('adminProp.delete');   
        });

     Route::prefix('/users')->group(function(){
        //show all users for admin
        Route::get('/','UserController@index')->name('admin.users.index');
        Route::get('/agents','UserController@showAgnets')->name('admin.users.agents'); 
        Route::get('/companies','UserController@showCompanies')->name('admin.users.companies'); 
        Route::get('/destroy/{id}','UserController@destroy')->name('admin.users.destroy'); 
        Route::get('/destroyComp/{id}','UserController@destroyCompany')->name('admin.users.destroyComp'); 
        });
        
    Route::prefix('/setting')->group(function(){
        // update website information
        Route::get('/','SettingController@index')->name('setting.index'); 
        Route::post('/','SettingController@handle')->name('SettingtHandle'); 
        });

    Route::prefix('/siteContent')->group(function(){
        // update website information
        Route::get('/','siteContentController@index')->name('siteContent.index'); 
        Route::post('/','siteContentController@update')->name('siteContent.update'); 
        });
    //Category operation
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
 
    //Cities operation 
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

