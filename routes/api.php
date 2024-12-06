<?php

use App\Http\Controllers\ApiController;

use Illuminate\Support\Facades\Route;

Route::get('products/search', [ApiController::class, 'search']);
Route::apiResource('products', ApiController::class);


