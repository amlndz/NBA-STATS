<?php

namespace App\Team\Application\Services;

use App\Team\Application\Mapper\TeamMapper;
use App\Team\Domain\TeamRepository;

class ListAllTeams
{
    private TeamRepository $teamRepository;

    public function __construct(TeamRepository $teamRepository)
    {
        $this->teamRepository = $teamRepository;
    }

    public function execute(): array
    {
        $teams = $this->teamRepository->getAllTeams();

        return TeamMapper::toDTOCollection($teams);
    }
}
