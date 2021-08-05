<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use App\Http\Controllers\RestaurantController;

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



Route::get("/",[HomeController::class,"index"]);

Route::group(['middleware' => ['auth']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:user']], function() { 
    Route::get('/userdash', 'App\Http\Controllers\HomeController@myprofile');
});

Route::get('restaurant-view', 'App\Http\Controllers\HomeController@restaurantview');

Route::get('menu-view', 'App\Http\Controllers\HomeController@menuview');

Route::get('contactus-view', 'App\Http\Controllers\HomeController@contactusview');

Route::get("/userView",[AdminController::class,"userView"]);

Route::get("/menuView",[RestaurantController::class,"menuView"]);

Route::POST("/uploadfood",[RestaurantController::class,"upload"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);