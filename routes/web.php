<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CourierController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\CartController;
use App\Http\Controllers\ProductlistController;
use App\Http\Controllers\User\OngkirController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\User\CheckOutController;
use App\Http\Controllers\Admin\LoginControllerAdmin;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\User\TransactionController;
use App\Http\Controllers\DashboardDiscountController;
use App\Http\Controllers\DashboardTransactionController;
use App\Http\Controllers\User\TransactionDetailController;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();
Auth::routes(['verify' => true]); //verifikasi email

Route::get('/', [App\Http\Controllers\LandingController::class, 'home'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('landing')->middleware('verified');
Route::get('/profile', [App\Http\Controllers\User\ProfileController::class, 'profile'])->name('userprofile');

Route::get('/productlist', [ProductlistController::class, 'productlist'])->name('productlist');
Route::group(['middleware' => ['auth', 'verified']], function () {
  Route::get('/user/{id}', [HomeController::class, 'user_notif'])->name('notifikasi');
  Route::get('/cartlist', [CartController::class, 'index'])->name('cartlist');
  Route::post('/addCarts', [CartController::class, 'addCarts'])->name('addCarts');
  Route::post('/delete', [CartController::class, 'delete'])->name('delete');
  Route::post('/minus', [CartController::class, 'minus'])->name('minus');
  Route::post('/plus', [CartController::class, 'plus'])->name('plus');
  Route::post('/address', [OngkirController::class, 'address'])->name('address');
  Route::post('/ongkir', [OngkirController::class, 'ongkir'])->name('ongkir');
  Route::post('/getongkir', [OngkirController::class, 'index'])->name('getongkir');
  Route::get('/getCity/ajax/{id}', [OngkirController::class, 'getCitiesAjax']);
  Route::post('/check_out/{ongkir}', [CheckOutController::class, 'index'])->name('check_out');
  Route::post('/pesan', [TransactionController::class, 'store'])->name('pesan');
  Route::get('/transaksi', [TransactionController::class, 'index'])->name('transaksi');
  Route::get('/transaksi_user/{id}', [TransactionDetailController::class, 'transaksi_detail'])->name('transaksi_detail');
  Route::post('/transaksi/pembayaran', [TransactionDetailController::class, 'pembayaran'])->name('pembayaran');
  Route::post('/transaksi/update', [TransactionDetailController::class, 'update'])->name('update');
  Route::post('/transaksi/review/{product_id}', [TransactionDetailController::class, 'review'])->name('review');
});

Route::get('/detail_produk_user/{id}', [ProdukController::class, 'detailproduk'])->name('detailproduk');
Route::get('/detail_produk/{id}', [HomeController::class, 'detail_produk'])->name('detail_produk');
Route::get('/admin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'loginAdmin'])->name('loginadmin');
Route::post('actionlogin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'action'])->name('actionlogin');
Route::get('logoutAdmin', [App\Http\Controllers\Admin\LoginControllerAdmin::class, 'logoutAdmin'])->name('logoutadmin');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
  Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name ('dashboard');
  Route::resource('kategori', KategoriController::class);
  Route::get('/indexdiscount', [DashboardDiscountController::class, 'index'])->name ('indexdiscount');
  Route::get('/createnewdiscount', [DashboardDiscountController::class, 'create'])->name('createnewdiscount');
  Route::post('/savenewdiscount', [DashboardDiscountController::class, 'store'])->name('savenewdiscount');
  Route::get('/editdiscount/{id}', [DashboardDiscountController::class, 'edit'])->name('editdiscount');
  Route::post('/saveeditdiscount/{id}', [DashboardDiscountController::class, 'update'])->name('saveeditdiscount');
  Route::post('/deletediscount/{id}', [DashboardDiscountController::class, 'destroy'])->name('deletediscount');
  Route::resource('produk', ProdukController::class);
  Route::resource('courier', CourierController::class);
  Route::resource('discount', DashboardDiscountController::class);
  Route::resource('detail', DetailController::class);
  Route::post('/produkimage', [App\Http\Controllers\ProdukController::class,'uploadimage']);
  Route::delete('/produkimage/{id}', [App\Http\Controllers\ProdukController::class,'deleteimage']);
  Route::resource('/transaction', DashboardTransactionController::class);
  Route::post('/verified', [DashboardTransactionController::class, 'verified'])->name('verified');
  Route::post('/kirim', [DashboardTransactionController::class, 'kirim'])->name('kirim');
  Route::resource('/products', DashboardProductController::class);
  Route::post('/respons/{id}', [DashboardProductController::class, 'respons'])->name('respons');
  Route::get('/notif/{id}', [DashboardController::class, 'admin_notif'])->name('notification');
  Route::get('/products/{id}', [DashboardProductController::class, 'show'])->name('productdetail');
  Route::get('/transaksi_detail/{id}', [DashboardTransactionController::class, 'edit'])->name('transaksi-detail');
  });
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
