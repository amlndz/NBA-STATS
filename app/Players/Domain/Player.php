<?php

namespace App\Players\Domain;

use Illuminate\Support\Facades\Date;

class Player
{
    private int $id;
    private string $first_name;
    private string $last_name;
    private DateTime $birth_date;
    private float $height;
    private float $weight;
    private string $position;
    private float $ppg;
    private float $apg;
    private float $rpg;
    private float $spg;
    private float $bpg;
    private float $fg_percentage;
    private float $three_p_percentage;
    private float $ft_percentage;
}
