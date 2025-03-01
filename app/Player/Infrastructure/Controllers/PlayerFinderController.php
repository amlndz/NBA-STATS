<?php

namespace App\Player\Infrastructure\Controllers;

use App\Player\Application\Services\ListPlayerById;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Exception;

class PlayerFinderController
{
    private ListPlayerById $listPlayerById;

    public function __construct(ListPlayerById $listPlayerById)
    {
        Log::info("✅ PlayerFinderController instanciado.");
        $this->listPlayerById = $listPlayerById;
    }

    public function show(int $id): JsonResponse
    {
        Log::info("🟡 Buscando jugador con ID: {$id}");

        try {
            $playerDTO = $this->listPlayerById->execute($id);
            return response()->json($playerDTO->toArray());
        } catch (Exception $e) {
            Log::error("❌ Error: " . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
