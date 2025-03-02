<?php

namespace App\Team\Infrastructure\Persistence\Doctrine;

use App\Share\Infrastructure\Doctrine\DoctrineRepository;
use App\Team\Domain\Team;
use App\Team\Domain\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;

class DoctrineTeamRepository extends DoctrineRepository implements TeamRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct($entityManager, Team::class);
    }

    public function getAllTeams(): array
    {
        return $this->findAll();
    }

    public function getTeamByID(int $id): ?Team
    {
        return parent::findById($id);
    }
}
