<?php

namespace App\Player\Application\Services;

use App\Player\Application\Mapper\PlayerMapper;
use App\Player\Domain\PlayerRepository;
use Illuminate\Support\Facades\Log;

class ListAllPlayers
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        Log::info("✅ ListAllPlayers instanciado correctamente.");
        $this->playerRepository = $playerRepository;
    }

    public function execute(): array
    {
        Log::info("🟡 Ejecutando execute() en ListAllPlayers.");
        $players = $this->playerRepository->getAll();

        if (empty($players)) {
            Log::warning("⚠️ No se encontraron jugadores en execute().");
        } else {
            Log::info("✅ Se encontraron jugadores en execute().", ['count' => count($players)]);
        }

        return PlayerMapper::toDTOCollection($players);
    }
}
