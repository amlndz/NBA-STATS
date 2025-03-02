<?php

namespace App\Team\Infrastructure\Controller;

use App\Team\Application\Services\ListTeamById;
use Illuminate\Http\JsonResponse;
use Exception;

class TeamFinderController
{
    private ListTeamById $listTeamById;

    public function __construct(ListTeamById $listTeamById)
    {
        $this->listTeamById = $listTeamById;
    }

    public function show(int $id): JsonResponse
    {
        try {
            $teamDTO = $this->listTeamById->execute($id);
            return response()->json($teamDTO->toArray());
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
