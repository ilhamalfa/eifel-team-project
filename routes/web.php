<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TableBookController;
use App\Http\Controllers\TableKategoriController;
use App\Http\Controllers\UserHomepageController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('buku', bukuController::class);

// Route Tabel Buku
Route::get('/tablebook', [TableBookController::class, 'index']);
Route::get('/createdatabook', [TableBookController::class, 'create']);
Route::post('/tablebook', [TableBookController::class, 'store']);
Route::get('/updatedatabook/{id}', [TableBookController::class, 'edit']);
Route::put('/tablebook/{id}', [TableBookController::class, 'update']);
Route::get('/tablebook/{id}', [TableBookController::class, 'delete']);

// Route Userhomepage
Route::get('/userhomepage', [UserHomepageController::class, 'index']);
Route::post('/userhomepage/update', [UserHomepageController::class, 'update']);

// Route::get('/userprofile/{id}', [UserProfileController::class, 'update']);
Route::get('userprofile', [UserHomepageController::class, 'userprofile']);
Route::resource('history', CustomerController::class);

// Customer Homepage
Route::get('customer', [CustomerController::class, 'index']);

// Cart Store
Route::post('customer/cart/store', [CustomerController::class, 'store']);

// Customer Cart View
Route::get('customer/cart', [CustomerController::class, 'list']);
Route::get('history', [CustomerController::class, 'history']);
