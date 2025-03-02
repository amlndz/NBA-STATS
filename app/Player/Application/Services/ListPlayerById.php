<?php

namespace App\Player\Application\Services;

use App\Player\Application\DTO\PlayerDTO;
use App\Player\Application\Mapper\PlayerMapper;
use App\Player\Domain\PlayerRepository;
use Illuminate\Support\Facades\Log;
use Exception;

class ListPlayerById
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        Log::info("✅ ListPlayerById instanciado correctamente.");
        $this->playerRepository = $playerRepository;
    }

    /**
     * @throws Exception
     */
    public function execute(int $id): ?PlayerDTO
    {
        Log::info("🟡 Ejecutando execute($id) en ListPlayerById.");
        $player = $this->playerRepository->findById($id);

        if (!$player) {
            Log::warning("⚠️ No se encontró el jugador con ID: $id");
            throw new Exception("Player not found", 404);
        }

        Log::info("✅ Jugador encontrado: {$player->getFirstName()} {$player->getLastName()}");
        return PlayerMapper::toDTO($player);
    }
}
