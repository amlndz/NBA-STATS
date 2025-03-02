<?php

namespace App\Team\Application\Services;

use App\Team\Application\DTO\TeamDTO;
use App\Team\Application\Mapper\TeamMapper;
use App\Team\Domain\TeamRepository;
use Exception;

class ListTeamById
{
    private TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    /**
     * @throws Exception
     */
    public function execute(int $id): ?TeamDTO
    {
        $team = $this->teamRepository->findById($id);

        if (!$team) {
            throw new Exception("Player not found", 404);
        }

        return TeamMapper::toDTO($team);
    }
}
