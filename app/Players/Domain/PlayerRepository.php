<?php

namespace App\Players\Domain;

interface PlayerRepository
{
    public function getAllPlayers(): array;
    public function getPlayerByName(int $id): Player;
    public function getPlayerById(int $id): Player;
}
