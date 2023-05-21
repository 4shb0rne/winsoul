<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TransactionController;
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
Route::get('/productdetail/{id}', [ProductController::class, 'productDetail']);
Route::get('/reviews/{id}', [ReviewController::class, 'getReviews']);
Route::post('/searchproduct', [ProductController::class, 'searchProduct']);
Route::get('/searchproduct', [ProductController::class, 'openSearchProduct']);


Route::middleware('guest')->group(function () {
    Route::get('/register', [UserController::class, 'registerPage']);
    Route::get('/login', [UserController::class, 'loginPage'])->name('login');
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
});
Route::middleware('auth')->group(function () {
    Route::get('/logout', [UserController::class, 'logout']);
    Route::post('/addreview/{id}', [ReviewController::class, 'addReview']);
    Route::get('/deletereview/{id}/{productid}', [ReviewController::class, 'deleteReview']);
    Route::post('/addcart/{id}', [CartController::class, 'addCart']);
    Route::get('/carts', [CartController::class, 'openCart']);
    Route::get('/deletecart/{id}', [CartController::class, 'deleteCartProduct']);
    Route::get('/checkout', [CartController::class, 'checkout']);
});
Route::middleware('admin')->group(function () {
    Route::get('/addproduct', [ProductController::class, 'addProductPage']);
    Route::post('/addproduct', [ProductController::class, 'addProduct']);
    Route::get('/updateproduct/{id}', [ProductController::class, 'updateProductPage']);
    Route::post('/updateproduct/{id}', [ProductController::class, 'updateProduct']);
    Route::get('/deleteproduct/{id}', [ProductController::class, 'deleteProduct']);
    Route::get('/transactions', [TransactionController::class, 'getAllTransactions']);
    Route::get('/transactions/{id}', [TransactionController::class, 'getTransactionDetail']);
    Route::get('/deletetransaction/{id}', [TransactionController::class, 'deleteTransaction']);
});



