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
        $this->playerRepository = $playerRepository;
    }

    /**
     * @throws Exception
     */
    public function execute(int $id): ?PlayerDTO
    {
        $player = $this->playerRepository->findById($id);

        if (!$player) {
            throw new Exception("Player not found", 404);
        }

        return PlayerMapper::toDTO($player);
    }
}
