<?php

namespace App\Player\Application\DTO;

class PlayerDTO
{
    public function __construct(
        public int $id,
        public string $full_name,
        public int $height,
        public int $weight,
        public string $position,
        public float $ppg,
        public float $apg,
        public float $rpg
    ) {}

    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
