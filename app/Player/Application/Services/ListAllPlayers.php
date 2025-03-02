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
        $this->playerRepository = $playerRepository;
    }

    public function execute(): array
    {
        $players = $this->playerRepository->getAll();

        return PlayerMapper::toDTOCollection($players);
    }
}
