<?php

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
    return view('users.pages.home');
});

Route::get('/dashboard', function () {
    return view('users.pages.home');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// User Route


// Admin Route
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // Login Route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });

    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');

    Route::middleware('admin')->group(function () {
        // Dashboard
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        // Store
        // Route::resource('profil-toko', 'StoreController');
        // Customer
        // Route::resource('pelanggan', 'CustomerController');
        // Category
        // Route::resource('kategori', 'CategoryController');
        // Sub Category
        // Route::resource('sub-kategori', 'SubCategoryController');
        // Product
        // Route::resource('produk', 'ProductController');
        // Article
        // Route::resource('artikel', 'ArticleController');
        // Transaction
        // Route::get('transaksi', 'TransactionController@index')->name('transaksi.index');
        // Route::get('riwayat-transaksi', 'TransactionController@transactionHistory')->name('transaksi.history');
        // Route::get('detail-transaksi/{id}', 'TransactionController@transactionDetail');
        // Report
        // Route::get('report-transaction', 'TransactionController@reportTransaction')->name('transaksi.report');
        // Route::get('print-pdf/{fromDate}/{toDate}', 'TransactionController@printPdf');
    });
});
