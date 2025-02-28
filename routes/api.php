<?php

use App\Player\Infrastructure\Controllers\PlayerController;
use Illuminate\Support\Facades\Route;

Route::get('/players', [PlayerController::class, 'getAllPlayers']);
Route::get('/player/{id}', [PlayerController::class, 'getPlayerById']);

