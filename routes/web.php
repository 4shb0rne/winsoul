<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ProductController::class, 'loadHomePage']);

Route::get('/register', [UserController::class, 'registerPage']);
Route::get('/login', [UserController::class, 'loginPage']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/addproduct', [ProductController::class, 'addProductPage']);
Route::post('/addproduct', [ProductController::class, 'addProduct']);
Route::get('/updateproduct/{id}', [ProductController::class, 'updateProductPage']);
Route::post('/updateproduct/{id}', [ProductController::class, 'updateProduct']);
Route::get('/productdetail/{id}', [ProductController::class, 'productDetail']);
