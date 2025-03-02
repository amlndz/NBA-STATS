<?php

use App\Player\Infrastructure\Controller\AllPlayersController;
use App\Player\Infrastructure\Controller\PlayerFinderController;
use App\Team\Infrastructure\Controller\AllTeamsController;
use Illuminate\Support\Facades\Route;

Route::get('/players', [AllPlayersController::class, 'index']);
Route::get('/player/{id}', [PlayerFinderController::class, 'show']);
Route::get('/teams', [AllTeamsController::class, 'index']);
