<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Models\Project;

Route::get('/', [PortfolioController::class, 'index']);
Route::get('/projects/{id}', [PortfolioController::class, 'findOne']);