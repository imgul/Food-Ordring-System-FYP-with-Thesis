<?php

use App\Models\Orders;
use App\Http\Controllers\Pages;
use App\Http\Controllers\Admins;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;

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

// Pages Routes??
Route::get('/', [Pages::class, 'home']);
Route::get('/categories', [Pages::class, 'category']);
Route::get('/foods', [Pages::class, 'foods']);
Route::get('/contact', [Pages::class, 'contact']);
Route::get('/sendorder/{id}', [OrdersController::class, 'sendorder']);
Route::Post('orderplaced', [OrdersController::class, 'orderplace']);
Route::get('search', [ProductsController::class, 'search']);

// // 
// Dashboard Routess
Route::post('/productadded', [ProductsController::class, 'Addproducts']);
Route::Post('categoryadded', [CategoriesController::class, 'addcatepro']);
Route::get('/login', [AdminController::class, 'loginpage']);
Route::Post('loggedin', [AdminController::class, 'login']);
Route::get('logout', [AdminController::class, 'logout']);
Route::get('deletecat/{id}', [CategoriesController::class, 'deletecat']);
Route::get('deleteorders/{id}', [OrdersController::class, 'deleteorders']);
Route::get('deletepro/{id}', [ProductsController::class, 'deleteproduct']);

// middleware for admin dashboard
Route::group(['middleware' => 'Admin'], function () {
    Route::get('OrdersManagement', [OrdersController::class, 'showorders']);
    Route::get('/Dashboard', [AdminController::class, 'dashboard']);
    Route::get('/ProductsManagement', [AdminController::class, 'showproduct']);
    Route::get('/AddCategory', [CategoriesController::class, 'showcategories']);
});
