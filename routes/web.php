<?php

use App\Http\Controllers\BeneficiaryController;
use App\Http\Controllers\RemitterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    Route::get('login',[UserController::class, 'login'])->name('login');
    Route::post('login',[UserController::class, 'loginAction'])->name('login.submit');
    Route::get('logout',[UserController::class, 'logout'])->name('logout');

    Route::get('forgot',[UserController::class, 'ForgotPassword'])->name('forgot');
    Route::post('forgot',[UserController::class, 'ForgotAction'])->name('forgot.submit');

    /*Route::post('reset','UsersController@ResetPasswordAction')->name('reset.submit');
    Route::get('reset','UsersController@ResetPassword')->name('reset');
    Route::post('resetaction','UsersController@ResetAction')->name('resetaction');*/


    Route::group(['middleware' => 'auth'], function() {
    Route::get('dashboard',[UserController::class, 'dashboard'])->name('dashboard');


    Route::get('remitters',[RemitterController::class, 'index'])->name('remitters');
    Route::any('search_remitters',[RemitterController::class, 'Remitters'])->name('search_remitters');
    Route::get('add/remitters',[RemitterController::class, 'Add'])->name('add_remitters');
    Route::post('add/remitters',[RemitterController::class, 'store'])->name('store_remitters');
    Route::get('edit/remitters/{id}',[RemitterController::class, 'Edit'])->name('edit_remitters');
    Route::post('edit/remitters',[RemitterController::class, 'update'])->name('update_remitters');
    Route::get('remitters/profile/{id}',[RemitterController::class,'profile'])->name('remitter_profile');
    //Route::get('remitters/profile/{id}',[RemitterController::class,'add_bene'])->name('add_bene');


    Route::get('beneficiaries',[BeneficiaryController::class, 'index'])->name('beneficiaries');
    Route::any('beneficiarylist',[BeneficiaryController::class, 'ApiBeneficiaries'])->name('beneficiary.list');
    Route::get('beneficiaries/edit/{id}',[BeneficiaryController::class, 'edit'])->name('beneficiaries.edit');

    Route::get('profile',[ProfileController::class, 'index'])->name('profile');
    Route::get('update',[ProfileController::class, 'index_update'])->name('index_update');
    Route::get('change/password',[ProfileController::class, 'Change_pass'])->name('change_pass');
    Route::get('generate/pin',[ProfileController::class, 'Generate_pin'])->name('generate_pin');
});
