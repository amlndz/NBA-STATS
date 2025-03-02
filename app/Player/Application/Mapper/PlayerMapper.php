<?php

namespace App\Player\Application\Mapper;

use App\Player\Application\DTO\PlayerDTO;
use App\Player\Domain\Player;

class PlayerMapper
{
    public static function toDTO(Player $player): PlayerDTO
    {
        return new PlayerDTO(
            id: $player->getId(),
            firstName: $player->getFirstName(),
            lastName: $player->getLastName(),
            height: $player->getHeight(),
            weight: $player->getWeight(),
            position: $player->getPosition(),
            ppg: $player->getPpg(),
            apg: $player->getApg(),
            rpg: $player->getRpg()
        );
    }

    public static function toDTOCollection(array $players): array
    {
        return array_map(fn (Player $player) => self::toDTO($player), $players);
    }
}
