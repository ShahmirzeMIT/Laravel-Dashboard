<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'register'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

    Route::get('/catagory', [App\Http\Controllers\Admin\CatagoryController::class, 'index']);
    Route::get('/catagory-add', [App\Http\Controllers\Admin\CatagoryController::class, 'create']);
    Route::post('/catagory-add', [App\Http\Controllers\Admin\CatagoryController::class, 'store']);
    Route::get('/catagory-edit/{catagory_id}', [App\Http\Controllers\Admin\CatagoryController::class, 'edit']);
    Route::put('/catagory-edit/{catagory_id}', [App\Http\Controllers\Admin\CatagoryController::class, 'update']);

    Route::get('/posts', [App\Http\Controllers\Admin\PostController::class, 'index']);
    Route::get('/posts-add', [App\Http\Controllers\Admin\PostController::class, 'create']);
    Route::post('/posts-add', [App\Http\Controllers\Admin\PostController::class, 'store']);
    Route::get('/post-edit/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'edit']);
    Route::put('/post-edit/{post_id}', [App\Http\Controllers\Admin\PostController::class, 'update']);


    Route::middleware(['auth','isDeveloper'])->get('/users', [App\Http\Controllers\Admin\UsersController::class, 'index']);
    Route::get('/add', [App\Http\Controllers\Admin\AddController::class, 'index']);
    Route::get('/addbasket', [App\Http\Controllers\Admin\AddBasketController::class, 'index']);
    Route::get('/addorder', [App\Http\Controllers\Admin\AddOrdersController::class, 'index']);
    Route::get('/api', [App\Http\Controllers\Admin\MyApiController::class, 'index']);
    Route::get('/images', [App\Http\Controllers\Admin\ImagesConroller::class, 'index']);
    Route::get('/orders', [App\Http\Controllers\Admin\OrdersController::class, 'index']);
    Route::get('/pagination', [App\Http\Controllers\Admin\PaginationsConroller::class, 'index']);
    Route::get('/update', [App\Http\Controllers\Admin\UpdatesOrderController::class, 'index']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
