<?php

namespace App\Repositories;

use Doctrine\ORM\EntityManager;
use App\Model\Player;
use App\Repositories\Contracts\PlayerRepository;

class DoctrinePlayerRepository implements PlayerRepository
{
    private EntityManager $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function getAll(): array
    {
        $players = $this->entityManager->getRepository(Player::class)->findAll();
        return array_map(fn($player) => $this->mapPlayerToArray($player), $players);
    }

    public function findById(int $id): ?array
    {
        $player = $this->entityManager->getRepository(Player::class)->find($id);
        return $player ? $this->mapPlayerToArray($player) : null;
    }

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
