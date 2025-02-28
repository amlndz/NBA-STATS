<?php

namespace App\Http\Controllers;

use Doctrine\ORM\EntityManager;
use App\Model\Player;
use Doctrine\ORM\Exception\NotSupported;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

class PlayerController extends Controller
{
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * 📌 Obtener todos los jugadores
     * @throws NotSupported
     */
    public function getAllPlayers(): JsonResponse
    {
        $players = $this->entityManager->getRepository(Player::class)->findAll();

        if (!$players) {
            return response()->json(['message' => 'No players found'], 404);
        }

        // 🔥 Convertimos los objetos a arrays antes de devolverlos
        $data = array_map(function ($player) {
            return [
                'id' => $player->getId(),
                'first_name' => $player->getFirstName(),
                'last_name' => $player->getLastName(),
                'height' => $player->getHeight(),
                'weight' => $player->getWeight(),
                'position' => $player->getPosition(),
                'ppg' => (float) $player->getPpg(),
                'apg' => (float) $player->getApg(),
                'rpg' => (float) $player->getRpg(),
            ];
        }, $players);

        return response()->json($data);
    }


    /**
     * 📌 Obtener un jugador por su ID
     * @throws NotSupported
     */
    public function getPlayerById(int $id): JsonResponse
    {
        $player = $this->entityManager->getRepository(Player::class)->find($id);

        if (!$player) {
            return response()->json(['error' => 'Player not found'], 404);
        }

        return response()->json($this->mapPlayerToArray($player));
    }

    /**
     * 🔄 Convertir un objeto Player a array
     */
    private function mapPlayerToArray(Player $player): array
    {
        return [
            'id' => $player->getId(),
            'first_name' => $player->getFirstName(),
            'last_name' => $player->getLastName(),
            'height' => $player->getHeight(),
            'weight' => $player->getWeight(),
            'position' => $player->getPosition(),
            'ppg' => (float) $player->getPpg(),
            'apg' => (float) $player->getApg(),
            'rpg' => (float) $player->getRpg(),
        ];
    }
}
