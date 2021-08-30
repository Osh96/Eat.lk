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

Route::get('/menu-view', [HomeController::class,"menuview"]);

//Route::get('/contactUs', 'HomeController@contactusview')->name('contact.show');

Route::get('/contactus-view', [HomeController::class,"contactusview"])->name('contact.show');;

//Route::post('/contactUs', 'HomeController@submitContact')->name('contact.submit');

Route::post('/contactus-view', [HomeController::class,"submitContact"])->name('contact.submit');;

Route::get("/userView",[AdminController::class,"userView"]);

Route::get("/menuView",[RestaurantController::class,"menuView"]);

Route::get("/mainMenuView",[RestaurantController::class,"mainMenuView"]);

Route::get("/restaurantEditView",[RestaurantController::class,"restaurantEditView"]);

Route::POST("/uploadEditRestaurant",[HomeController::class,"uploadEditRestaurant"]);

Route::POST("/uploadfood",[RestaurantController::class,"upload"]);

Route::POST("/addcart/{id}",[HomeController::class,"addcart"]);

Route::get("/showcart/{id}",[HomeController::class,"showcart"]);

Route::post("/orderconfirm",[HomeController::class,"orderconfirm"]);

Route::get("/search",[RestaurantController::class,"search"]);

Route::get("/removecart/{id}",[HomeController::class,"removecart"]);

Route::get("/orders",[RestaurantController::class,"orders"]);

Route::get("/deletefooditem/{id}",[RestaurantController::class,"deletefooditem"]);

Route::get("/deleteuser/{id}",[AdminController::class,"deleteuser"]);