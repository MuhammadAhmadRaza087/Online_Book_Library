<?php

use App\Http\Controllers\StoreController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [StoreController::class, 'index']);
Route::get('/about', [StoreController::class, 'about']);
Route::get('/contact', [StoreController::class, 'contact']);
Route::get('/shop', [StoreController::class, 'shop']);
Route::get('/admin', [StoreController::class, 'admin']);

Route::get('/addBook', [StoreController::class, 'addBook']);
Route::post('/addBookData', [StoreController::class, 'addBookData']);

Route::get('/addCustomer', [StoreController::class, 'addCustomer']);
Route::post('/addCustomerData', [StoreController::class, 'addCustomerData']);


Route::get('/deleteCustomer/{id}', [ShowController::class, 'deleteCustomer']);
Route::get('/deleteBook/{id}', [ShowController::class, 'deleteBook']);

Route::get('/viewBook', [ShowController::class, 'viewBook']);
Route::get('/viewCustomer', [ShowController::class, 'viewCustomer']);

Route::get('/updateBook/{id}', [StoreController::class, 'updateBook']);
Route::put('/editBook/{id}', [StoreController::class, 'editBook']);


Route::get('/updateCustomer/{id}', [StoreController::class, 'updateCustomer']);
Route::put('/editCustomer/{id}', [StoreController::class, 'editCustomer']);

Route::get('/signup', [StoreController::class, 'signup']);
Route::post('/signup', [StoreController::class, 'signUpData']);

Route::get('/signin', [StoreController::class, 'signup']);
