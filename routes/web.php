<?php

<<<<<<< HEAD
=======
use App\Http\Controllers\TableBookController;
>>>>>>> ec2fde1327d56df9bdce718e16dbcb5aff009b2e
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

<<<<<<< HEAD
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
// Route::get('/tablebook', function () {
//     return view('tablebook');
// });

Route::get('/tablebook', [TableBookController::class, 'index']);

Route::get('/createdatabook', [TableBookController::class, 'create']);

Route::post('/tablebook', [TableBookController::class, 'store']);

Route::get('/updatedatabook/{id}', [TableBookController::class, 'edit']);

Route::put('/tablebook/{id}', [TableBookController::class, 'update']);

Route::get('/tablebook/{id}', [TableBookController::class, 'delete']);
>>>>>>> ec2fde1327d56df9bdce718e16dbcb5aff009b2e
