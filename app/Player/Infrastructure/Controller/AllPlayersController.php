<?php

namespace App\Player\Infrastructure\Controller;

use App\Player\Application\Services\ListAllPlayers;
use Illuminate\Http\JsonResponse;

class AllPlayersController
{
    private ListAllPlayers $listAllPlayers;

    public function __construct(ListAllPlayers $listAllPlayers)
    {
        $this->listAllPlayers = $listAllPlayers;
    }

    public function index(): JsonResponse
    {
        $playersDTOs = $this->listAllPlayers->execute();

        return response()->json(array_map(fn ($playerDTO) => $playerDTO->toArray(), $playersDTOs));
    }
}
