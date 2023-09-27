<?php
App\Http\Controllers\Backend\NewsController;


Route::get('/news',[NewsController::class, 'index']);