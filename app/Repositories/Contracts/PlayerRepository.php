<?php

namespace App\Repositories\Contracts;

interface PlayerRepository
{
    public function getAll(): array;
    public function findById(int $id): ?array;
}
