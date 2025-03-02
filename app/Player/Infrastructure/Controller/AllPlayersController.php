<?php

namespace App\Player\Infrastructure\Controller;

use App\Player\Application\Services\ListAllPlayers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class AllPlayersController
{
    private ListAllPlayers $listAllPlayers;

    public function __construct(ListAllPlayers $listAllPlayers)
    {
        Log::info("✅ AllPlayersController instanciado.");
        $this->listAllPlayers = $listAllPlayers;
    }

    public function index(): JsonResponse
    {
        Log::info("🟡 Ejecutando index() en AllPlayersController.");
        $playersDTOs = $this->listAllPlayers->execute();

        if (empty($playersDTOs)) {
            Log::warning("⚠️ No se encontraron jugadores en index().");
        } else {
            Log::info("✅ Se encontraron jugadores en index().", ['count' => count($playersDTOs)]);
        }

        return response()->json(array_map(fn ($playerDTO) => $playerDTO->toArray(), $playersDTOs));
    }
}
