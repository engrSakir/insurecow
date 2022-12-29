<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\CompanyController;

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
Route::get('/home', 'HomeController@index')->name('home');

// --------------------------- company ----------------------
Route::middleware('company')->group(function(){
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'company'], function(){
        Route::get('home', 'CompanyController@index')->name('company.index');
        Route::get('reg', 'CompanyController@reg')->name('company.reg');
        Route::resource('profile', 'CompanyProfileController');
        Route::post('store', 'CompanyController@store')->name('company.store');
        Route::get('delete/{id}', 'CompanyController@delete')->name('company.delete');
        Route::get('download', 'CompanyController@download')->name('company.download');
    
    
    
    });
});

// --------------------------- farmer ----------------------
Route::middleware('farmer')->group(function(){
    // Route::get('/home', 'HomeController@index')->name('home');
    
     Route::group(['prefix'=>'farmer'],function(){
        Route::get('home', 'farmer\FarmerController@index')->name('farmer.index');
        Route::resource('farmer','farmer\FarmerController');
        Route::resource('reg_one','farmer\RegistrationController');
        Route::get('reg_two', 'farmer\RegistrationController@create')->name('farmer.reg_two');
        Route::resource('fprofile','farmer\FarmerProfileController');
 
        });
});

// --------------------------- superadmin----------------------
Route::middleware('superadmin')->group(function(){

Route::group(['prefix' => 'superadmin'], function(){
    Route::get('home', 'SuperAdminController@index')->name('superadmin.index');
    Route::get('reg', 'SuperAdminController@reg')->name('superadmin.reg');
    Route::post('store', 'SuperAdminController@store')->name('superadmin.store');
    Route::get('delete/{id}', 'SuperAdminController@delete')->name('superadmin.delete');
    Route::get('download', 'SuperAdminController@download')->name('superadmin.download');
    Route::resource('profiles', 'ProfileController');
});

});

//--------------------------- company ----------------------

Route::group(['prefix' => 'company'], function(){
    Route::get('home', 'CompanyController@index')->name('company.index');
    Route::get('reg', 'CompanyController@reg')->name('company.reg');
    Route::resource('profile', 'CompanyProfileController');
    Route::post('store', 'CompanyController@store')->name('company.store');
    Route::get('delete/{id}', 'CompanyController@delete')->name('company.delete');
    Route::get('download', 'CompanyController@download')->name('company.download');
});

//--------------------------- farmer ----------------------

Route::group(['prefix'=>'farmer'],function(){
    Route::get('home', 'farmer\FarmerController@index')->name('farmer.index');
    Route::resource('reg_one','farmer\RegistrationController');
    Route::get('reg_two', 'farmer\RegistrationController@create')->name('farmer.reg_two');
    Route::resource('farmerprofiles','farmer\FarmerProfileController');
    Route::get('/choose-plan', 'farmer\FarmerController@chooseplan')->name('farmer.choose.plan');
    Route::get('/change-password', 'farmer\FarmerController@changepassword')->name('farmer.change.password');
    Route::post('/change-password', 'farmer\FarmerController@updatepassword')->name('farmer.password.update');
    Route::get('/registered-cattle', 'farmer\FarmerController@registeredcattle')->name('farmer.registered.cattle');
    Route::get('/notification', 'farmer\FarmerController@farmernotification')->name('farmer.notification');
    // Route::resource('profile','farmer\FarmerProfileController');
}); 

// Route::group(['prefix' => 'company'], function(){
//     Route::get('home', 'CompanyController@index')->name('company.index');
//     Route::get('reg', 'CompanyController@reg')->name('company.reg');
//     Route::resource('profile', 'CompanyProfileController');
//     Route::post('store', 'CompanyController@store')->name('company.store');
//     Route::get('delete/{id}', 'CompanyController@delete')->name('company.delete');
//     Route::get('download', 'CompanyController@download')->name('company.download');



// });

//--------------------------- farmer ----------------------

// Route::group(['prefix'=>'farmer'],function(){
//     Route::get('home', 'farmer\FarmerController@index')->name('farmer.index');
//     Route::resource('farmer','farmer\FarmerController');
//     Route::resource('reg_one','farmer\RegistrationController');
//     Route::get('reg_two', 'farmer\RegistrationController@create')->name('farmer.reg_two');

//     Route::resource('fprofile','farmer\FarmerProfileController');

    

// });




Route::get('log_out', function (){
    \auth()->logout();
    return "log out";
});

