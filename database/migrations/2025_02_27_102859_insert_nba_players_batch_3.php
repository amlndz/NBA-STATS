<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Damian',
                'last_name' => 'Lillard',
                'birth_date' => '1990-07-15',
                'height' => 188,
                'weight' => 88,
                'position' => 'PG',
                'team_id' => 11, // Milwaukee Bucks
                'ppg' => 27.3,
                'apg' => 7.1,
                'rpg' => 4.2,
                'spg' => 1.2,
                'bpg' => 0.3,
                'fg_percentage' => 45.8,
                'three_p_percentage' => 39.5,
                'ft_percentage' => 91.2,
            ],
            [
                'first_name' => 'Kawhi',
                'last_name' => 'Leonard',
                'birth_date' => '1991-06-29',
                'height' => 201,
                'weight' => 102,
                'position' => 'SF',
                'team_id' => 12, // Los Angeles Clippers
                'ppg' => 25.9,
                'apg' => 4.3,
                'rpg' => 6.8,
                'spg' => 1.5,
                'bpg' => 0.9,
                'fg_percentage' => 49.1,
                'three_p_percentage' => 41.3,
                'ft_percentage' => 89.7,
            ],
            [
                'first_name' => 'Jalen',
                'last_name' => 'Brunson',
                'birth_date' => '1996-08-31',
                'height' => 185,
                'weight' => 86,
                'position' => 'PG',
                'team_id' => 13, // New York Knicks
                'ppg' => 26.2,
                'apg' => 6.5,
                'rpg' => 3.9,
                'spg' => 1.1,
                'bpg' => 0.2,
                'fg_percentage' => 47.6,
                'three_p_percentage' => 38.4,
                'ft_percentage' => 84.5,
            ],
            [
                'first_name' => 'Devin',
                'last_name' => 'Booker',
                'birth_date' => '1996-10-30',
                'height' => 196,
                'weight' => 93,
                'position' => 'SG',
                'team_id' => 14, // Phoenix Suns
                'ppg' => 28.0,
                'apg' => 5.6,
                'rpg' => 4.8,
                'spg' => 1.0,
                'bpg' => 0.5,
                'fg_percentage' => 49.3,
                'three_p_percentage' => 37.8,
                'ft_percentage' => 87.2,
            ],
            [
                'first_name' => 'Tyrese',
                'last_name' => 'Haliburton',
                'birth_date' => '2000-02-29',
                'height' => 196,
                'weight' => 84,
                'position' => 'PG',
                'team_id' => 15, // Indiana Pacers
                'ppg' => 24.5,
                'apg' => 10.2,
                'rpg' => 4.0,
                'spg' => 1.6,
                'bpg' => 0.4,
                'fg_percentage' => 47.9,
                'three_p_percentage' => 39.7,
                'ft_percentage' => 89.4,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [11, 12, 13, 14, 15])->delete();
    }
};
