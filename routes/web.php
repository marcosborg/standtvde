<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [WebsiteController::class, 'index']);

Route::get('/{id}/{slug}', [WebsiteController::class, 'car']);
Route::get('/viaturas', [WebsiteController::class, 'cars']);