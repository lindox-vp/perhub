<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboardController;
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
    return view('pages.auth.contents.login.index');
})->name('login');

Route::controller(DashboardController::class)->group(function () {
    Route::get('/a/dashboard', 'index')->name('a.dashboard');

    /**
     * action
     * 
     * */ 

});

Route::controller(AdminController::class)->group(function () {
    Route::get('/a/administrator', 'index')->name('a.admin');
    Route::get('/a/form-administrator', 'create')->name('a.admin.create');

    /**
     * action
     * 
     * */ 


});
