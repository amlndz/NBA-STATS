<?php

namespace App\Team\Domain;

interface TeamRepository
{
    public function getAllTeams(): array;
    public function getTeamByID(int $id): ?Team;
}
