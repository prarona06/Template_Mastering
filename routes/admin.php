<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');


Route::controller(LoginController::class)->group(function(){

Route::get('/login-form','showLoginForm')->name('admin.login');
Route::get('/login','login')->name('admin.login.submit');
Route::get('/logout','logout')->name('admin.logout');


});



});
