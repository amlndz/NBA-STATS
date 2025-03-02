<?php

namespace App\Team\Application\Mapper;

use App\Team\Application\DTO\TeamDTO;
use App\Team\Domain\Team;

class TeamMapper
{
    public static function toDTO(Team $team): TeamDTO
    {
        return new TeamDTO(
            id: $team->getId(),
            name: $team->getName(),
            city: $team->getCity(),
            abbreviation: $team->getAbbreviation(),
            conference: $team->getConference(),
            division: $team->getDivision()
        );
    }

    public static function toDTOCollection(array $teams): array
    {
        return array_map(fn (Team $team) => self::toDTO($team), $teams);
    }
}
