<?php

namespace App\Player\Infrastructure\Persistence\Doctrine;

use App\Player\Domain\Player;
use App\Player\Domain\PlayerRepository;
use Doctrine\ORM\EntityManagerInterface;
use Illuminate\Support\Facades\Log;

class DoctrinePlayerRepository extends DoctrineRepository implements PlayerRepository
{
    public function __construct(EntityManagerInterface $entityManager)
    {
        Log::info('✅ DoctrinePlayerRepository creado correctamente.');
        parent::__construct($entityManager, Player::class);
    }

    public function getAll(): array
    {
        Log::info('🟡 getAll() ejecutado en DoctrinePlayerRepository.');
        $players = $this->findAll();

        if (empty($players)) {
            Log::warning('⚠️ No se encontraron jugadores en la base de datos.');
        } else {
            Log::info('✅ Se encontraron jugadores.', ['count' => count($players)]);
        }

        return $players;
    }

    public function findById(int $id): ?Player
    {
        Log::info("🟡 findById({$id}) ejecutado en DoctrinePlayerRepository.");
        $player = parent::findById($id);

        if (!$player) {
            Log::warning("⚠️ No se encontró el jugador con ID: {$id}");
        } else {
            Log::info("✅ Jugador encontrado: {$player->getFirstName()} {$player->getLastName()}");
        }

        return $player;
    }
}
