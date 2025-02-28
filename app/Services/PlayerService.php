<?php

namespace App\Services;

use App\Repositories\Contracts\PlayerRepository;

class PlayerService
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    public function getAllPlayers(): array
    {
        return $this->playerRepository->getAll();
    }

    public function getPlayerById(int $id): ?array
    {
        return $this->playerRepository->findById($id);
    }
}
