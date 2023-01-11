<?php

use App\Company;
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
    return redirect()->route('login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// --------------------------- company ----------------------
Route::middleware(['company','auth'])->group(function(){
    // Route::get('/home', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'company'], function(){
        Route::get('home', 'CompanyController@index')->name('company.index');
        Route::get('reg', 'CompanyController@reg')->name('company.reg');
        Route::resource('profile', 'CompanyProfileController');
        Route::post('store', 'CompanyController@store')->name('company.store');
        Route::get('delete/{id}', 'CompanyController@delete')->name('company.delete');
        Route::get('view/{id}', 'CompanyController@view')->name('company.view');

        Route::get('download', 'CompanyController@download')->name('company.download');
        Route::get('history', 'CompanyController@history')->name('company.history');
        Route::resource('policy', 'CompanyPolicyController');
        Route::resource('quotation', 'CompanyQuotationController');
        Route::get('quotation_view', 'CompanyController@viewQuotation')->name('company.quotation_view');
        Route::get('policy_view', 'CompanyController@viewPolicy')->name('company.policy_view');




    });
});

// --------------------------- farmer ----------------------
Route::middleware(['farmer','auth'])->group(function(){
    // Route::get('/home', 'HomeController@index')->name('home');

     Route::group(['prefix'=>'farmer'],function(){
        // Route::get('home', 'farmer\FarmerController@index')->name('farmer.index');
        Route::resource('farmer','farmer\FarmerController');
        Route::resource('reg_one','farmer\RegistrationController');
        Route::resource('reg_two', 'farmer\FarmerReg2Controller');
        Route::get('home','farmer\FarmerHomeController@index')->name('farmer.index');

        // Route::get('reg_two', 'farmer\RegistrationController@create')->name('farmer.reg_two');
        // Route::resource('fprofile','farmer\FarmerProfileController');
        Route::resource('farmerprofiles','farmer\FarmerProfileController');
        Route::get('/choose-plan', 'farmer\FarmerController@chooseplan')->name('farmer.choose.plan');
        Route::get('/change-password', 'farmer\FarmerController@changepassword')->name('farmer.change.password');
        Route::post('/change-password', 'farmer\FarmerController@updatepassword')->name('farmer.password.update');
        Route::get('/registered-cattle', 'farmer\FarmerController@registeredcattle')->name('farmer.registered.cattle');
        Route::get('/notification', 'farmer\FarmerController@farmernotification')->name('farmer.notification');
        Route::get('/medical-report', 'farmer\FarmerController@medicalreport')->name('farmer.medical.report');
        Route::post('/medical-report', 'farmer\FarmerController@savemedicalreport')->name('save.medical.report');
        Route::get('/write-medical-report', 'farmer\FarmerController@writemedicalreport')->name('write.medical.report');
        Route::post('/write-medical-report', 'farmer\FarmerController@savewritemedicalreport')->name('save.write.medical.report');
        Route::get('/saved-medical-report', 'farmer\FarmerController@savedmedicalreport')->name('saved.medical.report');
        Route::get('/expense', 'farmer\FarmerController@expense')->name('farmer.expense');
        Route::post('/expense', 'farmer\FarmerController@farmerexpense')->name('farmer.expense.save');

        Route::resource('/expenses', 'farmer\FarmerExpenseController');
        Route::delete('expense/delete/{id}', 'farmer\FarmerExpenseController@destroy')->name('expense.destroy');
        Route::get('/expense/history', 'farmer\FarmerExpenseController@history')->name('expense.history');    
        Route::get('/medical/history', 'farmer\FarmerExpenseController@medicalhistory')->name('medical.history');    
        Route::get('/farmer/confirmation', 'farmer\FarmerExpenseController@confirm')->name('confirm');    
    });
});

// --------------------------- superadmin----------------------
Route::middleware(['superadmin','auth'])->group(function(){

Route::group(['prefix' => 'superadmin'], function(){
    Route::get('home', 'SuperAdminController@index')->name('superadmin.index');
    Route::get('reg', 'SuperAdminController@reg')->name('superadmin.reg');
    Route::post('store', 'SuperAdminController@store')->name('superadmin.store');
    Route::get('view/{id}', 'SuperAdminController@view')->name('superadmin.view');

    Route::get('delete/{id}', 'SuperAdminController@delete')->name('superadmin.delete');
    Route::get('download', 'SuperAdminController@download')->name('superadmin.download');
    Route::get('history', 'SuperAdminController@history')->name('superadmin.history');
    Route::resource('profiles', 'ProfileController');
});

});



Route::get('log_out', function (){
    \auth()->logout();
    return redirect()->route('login');
})->name('log_out');

Route::get('test', function(){
    return Company::where('user_id', auth()->user()->id)->orderBy('id','desc')->first()->image;
});
