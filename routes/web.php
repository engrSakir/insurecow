<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');



// --------------------------- farmer ----------------------
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('company')->group(function(){

    

   
    // Route::get('/home', 'HomeController@index')->name('home');


});

Route::middleware('farmer')->group(function(){

    

    // Route::get('/home', 'HomeController@index')->name('home');


});


// --------------------------- farmer ----------------------


Route::group(['prefix' => 'company'], function(){
    Route::get('home', 'CompanyController@index')->name('company.index');
});

Route::group(['prefix' => 'superadmin'], function(){
    Route::get('home', 'SuperAdminController@index')->name('superadmin.index');
    Route::get('reg', 'CompanyController@reg')->name('company.reg');
});