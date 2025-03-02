<?php

namespace App\Player\Application\DTO;

class PlayerDTO
{
    public function __construct(
        public int $id,
        public string $firstName,
        public string $lastName,
        public int $height,
        public int $weight,
        public string $position,
        public float $ppg,
        public float $apg,
        public float $rpg
    ) {}

    public function getFormattedName(): string
    {
        return "{$this->firstName} {$this->lastName}";
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->getFormattedName(),
            'height' => $this->height,
            'weight' => $this->weight,
            'position' => $this->position,
            'ppg' => $this->ppg,
            'apg' => $this->apg,
            'rpg' => $this->rpg
        ];
    }
}
