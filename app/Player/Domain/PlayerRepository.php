<?php

namespace App\Player\Domain;

interface PlayerRepository
{
    /**
     * @return Player[]
     */
    public function getAllPlayers(): array;
    public function getPlayerById(int $id): ?Player;
}
