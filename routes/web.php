<?php

use App\Http\Controllers\bukuController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TableBookController;
use App\Http\Controllers\TableKategoriController;
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
// Route::get('/tablebook', function () {
//     return view('tablebook');
// });

Route::resource('buku', bukuController::class);

Route::get('/tablebook', [TableBookController::class, 'index']);

Route::get('/createdatabook', [TableBookController::class, 'create']);

Route::post('/tablebook', [TableBookController::class, 'store']);

Route::get('/updatedatabook/{id}', [TableBookController::class, 'edit']);

Route::put('/tablebook/{id}', [TableBookController::class, 'update']);

Route::get('/tablebook/{id}', [TableBookController::class, 'delete']);

//Route Table Kategori
Route::resource('kategori', TableKategoriController::class);


Route::get('/tablekategori', [TableKategoriController::class, 'index']);

Route::get('/createdatakategori', [TableKategoriController::class, 'create']);

Route::post('/tablekategori', [TableKategoriController::class, 'store']);

Route::get('/updatedatakategori/{id}', [TableKategoriController::class, 'edit']);

Route::put('/tablekategori/{id}', [TableKategoriController::class, 'update']);

Route::get('/tablekategori/{id}', [TableKategoriController::class, 'delete']);

Auth::routes();

Route::get('/customer', [CustomerController::class, 'index']);

Route::post('/customer/cart/store', [CustomerController::class, 'store']);

Route::get('/customer/cart/', [CustomerController::class, 'list']);

Route::delete('/customer/cart/{id}', [CustomerController::class, 'deleteCart']);

Route::post('/checkout', [CustomerController::class, 'checkOut']);

Route::get('/alamat', [CustomerController::class, 'alamat']);

Route::post('/alamat', [CustomerController::class, 'storeAlamat']);

Route::get('userhomepage', function () {
    return view('userhomepage');
});

Route::get('userprofile', function () {
    return view('userprofile');
});