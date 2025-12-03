<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function(){
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');


Route::controller(LoginController::class)->group(function(){

    Route::get('/login-form','showLoginForm')->name('admin.login');
    Route::Post('/login','login')->name('admin.login.submit');
    Route::get('/logout','logout')->name('admin.logout');

});


Route::controller(CategoryController::class)
->prefix('categories')->group(function(){
    Route::get('/','index')->name('admin.categories');
     Route::post('/','store')->name('admin.categories.store');
      Route::get('/edit/{id}','edit')->name('admin.categories.edit');
       Route::patch('/uodate/{id}','update')->name('admin.categories.update');
        Route::delete('/delete/{id}','delete')->name('admin.categories.delete');

});






});
