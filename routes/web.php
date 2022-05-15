<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\DetailController;


// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Auth::routes(['verify' => true]); //verifikasi email

Route::get('/', [App\Http\Controllers\LandingController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('landing')->middleware('verified');
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'profile'])->name('userprofile');

Route::get('/admin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'loginAdmin'])->name('loginadmin');
Route::post('actionlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'action'])->name('actionlogin');
Route::get('logoutAdmin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'logoutAdmin'])->name('logoutadmin');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name ('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('courier', CourierController::class);
    Route::resource('detail', DetailController::class);
    Route::post('/produkimage', [App\Http\Controllers\ProdukController::class,'uploadimage']);
    Route::delete('/produkimage/{id}', [App\Http\Controllers\ProdukController::class,'deleteimage']);
 
  });
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
