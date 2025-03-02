<?php

namespace App\Team\Infrastructure\Controller;

use App\Team\Application\Services\ListAllTeams;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class AllTeamsController
{
    private ListAllTeams $listAllTeams;

    public function __construct(ListAllTeams $listAllTeams)
    {
        Log::info("✅ AllPlayersController instanciado.");
        $this->listAllTeams = $listAllTeams;
    }

    public function index(): JsonResponse
    {
        Log::info("🟡 Ejecutando index() en AllPlayersController.");
        $teamsDTOs = $this->listAllTeams->execute();

        if (empty($teamsDTOs)) {
            Log::warning("⚠️ No se encontraron jugadores en index().");
        } else {
            Log::info("✅ Se encontraron jugadores en index().", ['count' => count($teamsDTOs)]);
        }

        return response()->json(array_map(fn ($teamDTO) => $teamDTO->toArray(), $teamsDTOs));
    }
}
