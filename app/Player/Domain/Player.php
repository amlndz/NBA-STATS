<?php

namespace App\Player\Domain;

class Player
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private int $height;
    private int $weight;
    private string $position;
    private float $ppg;
    private float $apg;
    private float $rpg;

    public function getId(): int { return $this->id; }
    public function getFirstName(): string { return $this->first_name; }
    public function getLastName(): string { return $this->last_name; }
    public function getHeight(): int { return $this->height; }
    public function getWeight(): int { return $this->weight; }
    public function getPosition(): string { return $this->position; }
    public function getPpg(): float { return $this->ppg; }
    public function getApg(): float { return $this->apg; }
    public function getRpg(): float { return $this->rpg; }
}
