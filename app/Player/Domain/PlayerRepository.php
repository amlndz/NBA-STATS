<?php

namespace App\Player\Domain;

interface PlayerRepository
{
    public function getAll(): array;
    public function findById(int $id): ?Player;
}
