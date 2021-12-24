<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\PostController;

use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PageController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\ClientController;




Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::resource('contacts', ContactController::class);
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {


    Route::resource('permissions', PermissionController::class);
    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('posts', PostController::class);
    Route::resource('pages', PageController::class);

    Route::resource('clients', ClientController::class);


    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');


    // Route::get('dashboard', function () {
    //     return view('backend.dashboard');
    // });
});
