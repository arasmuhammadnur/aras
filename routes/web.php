<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\DistributorController;

// Guest Route 
Route::group(['middleware' => 'guest'], function() { 
    Route::get('/', function () { 
        return view('welcome'); 
    });

    Route::get('/register', [AuthController::class, 'register'])->name('register'); 
    Route::post('/post-register', [AuthController::class, 'post_register'])->name('post.register');

    Route::post('/post-login', [AuthController::class, 'login']);
});

// Admin Route 
Route::group(['middleware' => 'admin'], function() { 
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Product Route 
    Route::get('/product', [ProductController::class, 'index'])->name('admin.product');

    // Distributor Route
    Route::get('/distributors', [DistributorController::class, 'index'])->name('admin.distributor');
    Route::resource('admin/distributor', DistributorController::class);
    Route::get('/admin-logout', [AuthController::class, 'admin_logout'])->name('admin.logout');
});

// User Route 
Route::group(['middleware' => ['web', 'auth']], function() { // Tambahkan 'auth' di sini
    Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

    Route::get('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');
<<<<<<< HEAD
});
=======

    // Product route untuk User
    Route::get('/user.product/detail/{id}', [UserController::class, 'detail_product'])->middleware('auth')->name('user.detail.product');
    Route::get('/user-flash', [ProductController::class, 'flashSale'])->name('user.flash');

    // Route untuk pembelian produk
    Route::get('/product/purchase/{productId}/{userId}', [UserController::class, 'purchaseProduct'])->name('user.purchase.product');
});



>>>>>>> b9f0697 (Penerepan fungsi crud pada produk,distributor,dan flash sale)
