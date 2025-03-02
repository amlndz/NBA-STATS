<?php

namespace App\Team\Application\Services;

use App\Team\Application\Mapper\TeamMapper;
use App\Team\Domain\TeamRepository;
use Illuminate\Support\Facades\Log;

class ListAllTeams
{
    private TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        Log::info("✅ ListAllPlayers instanciado correctamente.");
        $this->teamRepository = $teamRepository;
    }

    public function execute(): array
    {
        Log::info("🟡 Ejecutando execute() en ListAllPlayers.");
        $teams = $this->teamRepository->getAll();

        if (empty($teams)) {
            Log::warning("⚠️ No se encontraron jugadores en execute().");
        } else {
            Log::info("✅ Se encontraron jugadores en execute().", ['count' => count($teams)]);
        }

        return TeamMapper::toDTOCollection($teams);
    }
}
