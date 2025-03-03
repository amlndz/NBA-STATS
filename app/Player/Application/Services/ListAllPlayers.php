<?php

namespace App\Player\Application\Services;

use App\Player\Application\Mapper\PlayerMapper;
use App\Player\Domain\Player;
use App\Player\Domain\PlayerRepository;
use Illuminate\Support\Facades\Log;

class ListAllPlayers
{
    private PlayerRepository $playerRepository;

    public function __construct(PlayerRepository $playerRepository)
    {
        $this->playerRepository = $playerRepository;
    }

    /**
     * @return Player[]
     */
    public function execute(): array
    {
        $players = $this->playerRepository->getAllPlayers();

        return PlayerMapper::toDTOCollection($players);
    }
}
