<?php

namespace App\Team\Domain;

interface TeamRepository
{
    public function getAll(): array;
    public function findById(int $id): ?Team;
}
