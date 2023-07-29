<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\PortfolioController; 


Route::get('/', [PortfolioController::class, 'index']);
Route::get('/data', [ConnexionController::class, 'getData']);