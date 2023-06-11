<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

// Route::get('/signup', function () {
//     return view('signup');
// });

Route::get('signup', [UserController::class, 'viewsignup']);
Route::post('save-signup', [UserController::class, 'dosignup']);


Route::post('user-login', [UserController::class, 'dologin']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/global', function () {
    return view('global');
});

Route::get('/allcustomer1', function () {
    return view('allcustomer');
});

Route::get('/newcustomer', function () {
    return view('newcustomer');
});

Route::get('/editcustomer', function () {
    return view('editcustomer')->name('id');
});

Route::get('add-customer', [CustomerController::class, 'addCustomer']);

Route::post('save-customer', [CustomerController::class, 'store']);
Route::get('edit-customer/{id}', [CustomerController::class, 'editCustomer']);
Route::post('update-customer', [CustomerController::class, 'updateCustomer']);
Route::get('delete-customer/{id}', [CustomerController::class, 'deleteCustomer']);
Route::get('allcustomer', [CustomerController::class, 'index']);
