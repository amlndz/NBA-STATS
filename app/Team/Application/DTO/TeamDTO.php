<?php

namespace App\Team\Application\DTO;

class TeamDTO
{
    public function __construct(
        public int $id,
        public string $name,
        public string $city,
        public string $abbreviation,
        public string $conference,
        public string $division
    ) {}

    public function getFormattedName(): string
    {
        return "$this->name ($this->abbreviation)";
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->getFormattedName(),
            'city' => $this->city,
            'conference' => $this->conference,
            'division' => $this->division
        ];
    }
}
