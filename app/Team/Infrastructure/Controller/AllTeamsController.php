<?php

namespace App\Team\Infrastructure\Controller;

use App\Team\Application\Services\ListAllTeams;
use Illuminate\Http\JsonResponse;

class AllTeamsController
{
    private ListAllTeams $listAllTeams;

    public function __construct(ListAllTeams $listAllTeams)
    {
        $this->listAllTeams = $listAllTeams;
    }

    public function index(): JsonResponse
    {
        $teamsDTOs = $this->listAllTeams->execute();
        return response()->json(array_map(fn ($teamDTO) => $teamDTO->toArray(), $teamsDTOs));
    }
}
