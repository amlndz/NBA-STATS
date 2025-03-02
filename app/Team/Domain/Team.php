<?php

namespace App\Team\Domain;

class Team
{
    private int $id;
    private string $name;
    private string $city;
    private string $abbreviation;
    private string $conference;
    private string $division;

    public function __construct(int $id, string $name, string $city, string $abbreviation, string $conference, string $division)
    {
        $this->id = $id;
        $this->name = $name;
        $this->city = $city;
        $this->abbreviation = $abbreviation;
        $this->conference = $conference;
        $this->division = $division;
    }

    public function getId(): int { return $this->id; }
    public function getName(): string { return $this->name; }
    public function getCity(): string { return $this->city; }
    public function getAbbreviation(): string { return $this->abbreviation; }
    public function getConference(): string { return $this->conference; }
    public function getDivision(): string { return $this->division; }
}
