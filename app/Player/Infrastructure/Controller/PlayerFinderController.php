<?php

namespace App\Player\Infrastructure\Controller;

use App\Player\Application\Services\ListPlayerById;
use Illuminate\Http\JsonResponse;
use Exception;

class PlayerFinderController
{
    private ListPlayerById $listPlayerById;

    public function __construct(ListPlayerById $listPlayerById)
    {
        $this->listPlayerById = $listPlayerById;
    }

    public function show(int $id): JsonResponse
    {
        try {
            $playerDTO = $this->listPlayerById->execute($id);
            return response()->json($playerDTO->toArray());
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
