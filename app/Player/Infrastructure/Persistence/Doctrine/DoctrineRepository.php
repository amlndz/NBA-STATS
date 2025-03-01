<?php

namespace App\Player\Infrastructure\Persistence\Doctrine;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\EntityRepository;
use Illuminate\Support\Facades\Log;

abstract class DoctrineRepository
{
    protected EntityManagerInterface $entityManager;
    protected EntityRepository $repository;

    public function __construct(EntityManagerInterface $entityManager, string $entityClass)
    {
        Log::info("✅ DoctrineRepository creado para {$entityClass}.");
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository($entityClass);
    }

    public function findAll(): array
    {
        Log::info("🟡 Ejecutando findAll() en " . get_class($this));
        return $this->repository->findAll();
    }

    public function findById(int $id): ?object
    {
        Log::info("🟡 Ejecutando findById({$id}) en " . get_class($this));
        return $this->repository->find($id);
    }
}
