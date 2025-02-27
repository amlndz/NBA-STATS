<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Jamal',
                'last_name' => 'Murray',
                'birth_date' => '1997-02-23',
                'height' => 193,
                'weight' => 98,
                'position' => 'PG',
                'team_id' => 36, // Denver Nuggets
                'ppg' => 21.3,
                'apg' => 6.7,
                'rpg' => 4.2,
                'spg' => 1.1,
                'bpg' => 0.6,
                'fg_percentage' => 48.5,
                'three_p_percentage' => 39.4,
                'ft_percentage' => 85.7,
            ],
            [
                'first_name' => 'Desmond',
                'last_name' => 'Bane',
                'birth_date' => '1998-06-25',
                'height' => 196,
                'weight' => 98,
                'position' => 'SG',
                'team_id' => 37, // Memphis Grizzlies
                'ppg' => 22.1,
                'apg' => 4.9,
                'rpg' => 4.5,
                'spg' => 1.3,
                'bpg' => 0.4,
                'fg_percentage' => 47.8,
                'three_p_percentage' => 41.1,
                'ft_percentage' => 86.2,
            ],
            [
                'first_name' => 'Fred',
                'last_name' => 'VanVleet',
                'birth_date' => '1994-02-25',
                'height' => 183,
                'weight' => 88,
                'position' => 'PG',
                'team_id' => 38, // Houston Rockets
                'ppg' => 20.7,
                'apg' => 7.3,
                'rpg' => 3.8,
                'spg' => 1.6,
                'bpg' => 0.3,
                'fg_percentage' => 44.9,
                'three_p_percentage' => 37.4,
                'ft_percentage' => 84.5,
            ],
            [
                'first_name' => 'Evan',
                'last_name' => 'Mobley',
                'birth_date' => '2001-06-18',
                'height' => 213,
                'weight' => 98,
                'position' => 'PF',
                'team_id' => 39, // Cleveland Cavaliers
                'ppg' => 19.2,
                'apg' => 3.5,
                'rpg' => 9.1,
                'spg' => 1.0,
                'bpg' => 2.1,
                'fg_percentage' => 50.7,
                'three_p_percentage' => 33.1,
                'ft_percentage' => 80.4,
            ],
            [
                'first_name' => 'Franz',
                'last_name' => 'Wagner',
                'birth_date' => '2001-08-27',
                'height' => 206,
                'weight' => 100,
                'position' => 'SF',
                'team_id' => 40, // Orlando Magic
                'ppg' => 19.7,
                'apg' => 4.1,
                'rpg' => 6.3,
                'spg' => 1.2,
                'bpg' => 0.8,
                'fg_percentage' => 48.9,
                'three_p_percentage' => 36.7,
                'ft_percentage' => 82.8,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [36, 37, 38, 39, 40])->delete();
    }
};
