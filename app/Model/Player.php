<?php

namespace App\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="players")
 */
class Player
{
    /** @ORM\Id @ORM\GeneratedValue @ORM\Column(type="integer") */
    private $id;

    /** @ORM\Column(type="string") */
    private $first_name;

    /** @ORM\Column(type="string") */
    private $last_name;

    /** @ORM\Column(type="integer") */
    private $height;

    /** @ORM\Column(type="integer") */
    private $weight;

    /** @ORM\Column(type="string") */
    private $position;

    /** @ORM\Column(type="decimal", precision=4, scale=1, options={"default" : 0}) */
    private $ppg;

    /** @ORM\Column(type="decimal", precision=4, scale=1, options={"default" : 0}) */
    private $apg;

    /** @ORM\Column(type="decimal", precision=4, scale=1, options={"default" : 0}) */
    private $rpg;

    // Getters
    public function getId() { return $this->id; }
    public function getFirstName() { return $this->first_name; }
    public function getLastName() { return $this->last_name; }
    public function getHeight() { return $this->height; }
    public function getWeight() { return $this->weight; }
    public function getPosition() { return $this->position; }
    public function getPpg() { return $this->ppg; }
    public function getApg() { return $this->apg; }
    public function getRpg() { return $this->rpg; }
}
