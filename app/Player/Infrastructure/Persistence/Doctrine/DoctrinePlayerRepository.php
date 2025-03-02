<?php

namespace App\Player\Infrastructure\Persistence\Doctrine;

use App\Player\Domain\Player;
use App\Player\Domain\PlayerRepository;
use App\Share\Infrastructure\Doctrine\DoctrineRepository;
use Doctrine\ORM\EntityManagerInterface;

class DoctrinePlayerRepository extends DoctrineRepository implements PlayerRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Player::class);
    }

    public function getAll(): array
    {
        return $this->findAll();
    }

    public function findById(int $id): ?Player
    {
        return parent::findById($id);
    }
}
