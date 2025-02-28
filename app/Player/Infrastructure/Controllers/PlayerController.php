<?php

namespace App\Player\Infrastructure\Controllers;

use App\Player\Application\PlayerService;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class PlayerController extends Controller
{
    private PlayerService $playerService;

    public function __construct(PlayerService $playerService)
    {
        $this->playerService = $playerService;
    }

    /**
     * 📌 Obtener todos los jugadores
     */
    public function getAllPlayers(): JsonResponse
    {
        $players = $this->playerService->getAllPlayers();
        return response()->json($players);
    }

    /**
     * 📌 Obtener un jugador por su ID
     */
    public function getPlayerById(int $id): JsonResponse
    {
        $player = $this->playerService->getPlayerById($id);

        if (!$player) {
            return response()->json(['error' => 'Player not found'], 404);
        }

        return response()->json($player);
    }
}
