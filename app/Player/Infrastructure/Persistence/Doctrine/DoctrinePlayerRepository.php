<?php

namespace App\Player\Infrastructure\Persistence\Doctrine;

use App\Player\Domain\Player;
use App\Player\Domain\PlayerRepository;
use App\Shared\Infrastructure\Doctrine\DoctrineRepository;
use Doctrine\ORM\EntityManagerInterface;

class DoctrinePlayerRepository extends DoctrineRepository implements PlayerRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Player::class);
    }

    /**
     * @return Player[]
     */
    public function getAllPlayers(): array
    {
        return $this->findAll();
    }

    public function getPlayerById(int $id): ?Player
    {
        return $this->findById($id);
    }
}
