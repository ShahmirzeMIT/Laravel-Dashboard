<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::post('/register', [App\Http\Controllers\RegistrationController::class, 'register'])->name('register');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\Frontend\FrontendController::class, 'index']);


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
    Route::middleware(['auth','isDeveloper'])->get('/users/{user_id}', [App\Http\Controllers\Admin\UsersController::class, 'edit']);
    Route::middleware(['auth','isDeveloper'])->put('/users/{user_id}', [App\Http\Controllers\Admin\UsersController::class, 'update']);
    

    Route::middleware(['auth','isDeveloper'])->get('/api', [App\Http\Controllers\Admin\MyApiController::class, 'index']);
    
    Route::middleware(['auth','isDeveloper'])->get('/news', [App\Http\Controllers\Api\NewsController::class, 'index']);
    Route::middleware(['auth','isDeveloper'])->get('/news-add', [App\Http\Controllers\Api\NewsController::class, 'create']);
    Route::middleware(['auth','isDeveloper'])->post('/news-add', [App\Http\Controllers\Api\NewsController::class, 'store']);
    Route::middleware(['auth','isDeveloper'])->get('/news-edit/{news_id}', [App\Http\Controllers\Api\NewsController::class, 'edit']);
    Route::middleware(['auth','isDeveloper'])->put('/news-edit/{news_id}', [App\Http\Controllers\Api\NewsController::class, 'update']);


    Route::get('/profile',[App\Http\Controllers\Admin\ProfileController::class, 'index']);





    Route::get('/add', [App\Http\Controllers\Admin\AddController::class, 'index']);
    Route::get('/addbasket', [App\Http\Controllers\Admin\AddBasketController::class, 'index']);
    Route::get('/addorder', [App\Http\Controllers\Admin\AddOrdersController::class, 'index']);
    Route::get('/images', [App\Http\Controllers\Admin\ImagesConroller::class, 'index']);
    Route::get('/orders', [App\Http\Controllers\Admin\OrdersController::class, 'index']);
    Route::get('/pagination', [App\Http\Controllers\Admin\PaginationsConroller::class, 'index']);
    Route::get('/update', [App\Http\Controllers\Admin\UpdatesOrderController::class, 'index']);
});

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
