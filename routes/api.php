<?php

use App\Player\Infrastructure\Controllers\AllPlayersController;
use App\Player\Infrastructure\Controllers\PlayerFinderController;
use Illuminate\Support\Facades\Route;

Route::get('/players', [AllPlayersController::class, 'index']);
Route::get('/player/{id}', [PlayerFinderController::class, 'show']);
