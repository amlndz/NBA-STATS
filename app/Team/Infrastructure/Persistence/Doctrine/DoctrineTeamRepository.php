<?php

namespace App\Team\Infrastructure\Persistence\Doctrine;

use App\Share\Infrastructure\Doctrine\DoctrineRepository;
use App\Team\Domain\Team;
use App\Team\Domain\TeamRepository;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\Facades\Log;

class DoctrineTeamRepository extends DoctrineRepository implements TeamRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        Log::info('✅ DoctrinePlayerRepository creado correctamente.');
        parent::__construct($entityManager, Team::class);
    }

    public function getAll(): array
    {
        Log::info('🟡 getAll() ejecutado en DoctrinePlayerRepository.');
        $teams = $this->findAll();

        if (empty($teams)) {
            Log::warning('⚠️ No se encontraron jugadores en la base de datos.');
        } else {
            Log::info('✅ Se encontraron jugadores.', ['count' => count($teams)]);
        }

        return $teams;
    }

    public function findById(int $id): ?Team
    {
        Log::info("🟡 findById($id) ejecutado en DoctrinePlayerRepository.");
        $team = parent::findById($id);

        if (!$team) {
            Log::warning("⚠️ No se encontró el jugador con ID: $id");
        } else {
            Log::info("✅ Jugador encontrado: {$team->getFirstName()} {$team->getLastName()}");
        }

        return $team;
    }
}
