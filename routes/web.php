<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerSearchController;

Route::get('/', [CustomerSearchController::class, 'index']);
Route::post('customer/Search/create', [CustomerSearchController::class, 'create']);