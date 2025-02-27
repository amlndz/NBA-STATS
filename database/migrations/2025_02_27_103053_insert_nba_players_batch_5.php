<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Ja',
                'last_name' => 'Morant',
                'birth_date' => '1999-08-10',
                'height' => 188,
                'weight' => 79,
                'position' => 'PG',
                'team_id' => 21, // Memphis Grizzlies
                'ppg' => 26.3,
                'apg' => 7.2,
                'rpg' => 5.5,
                'spg' => 1.3,
                'bpg' => 0.7,
                'fg_percentage' => 47.1,
                'three_p_percentage' => 36.8,
                'ft_percentage' => 82.4,
            ],
            [
                'first_name' => 'Paolo',
                'last_name' => 'Banchero',
                'birth_date' => '2002-11-12',
                'height' => 208,
                'weight' => 113,
                'position' => 'PF',
                'team_id' => 22, // Orlando Magic
                'ppg' => 22.7,
                'apg' => 4.5,
                'rpg' => 7.3,
                'spg' => 1.1,
                'bpg' => 0.8,
                'fg_percentage' => 48.3,
                'three_p_percentage' => 35.2,
                'ft_percentage' => 80.6,
            ],
            [
                'first_name' => 'Brandon',
                'last_name' => 'Ingram',
                'birth_date' => '1997-09-02',
                'height' => 201,
                'weight' => 86,
                'position' => 'SF',
                'team_id' => 23, // New Orleans Pelicans
                'ppg' => 24.9,
                'apg' => 5.2,
                'rpg' => 5.7,
                'spg' => 1.0,
                'bpg' => 0.7,
                'fg_percentage' => 48.6,
                'three_p_percentage' => 38.9,
                'ft_percentage' => 85.2,
            ],
            [
                'first_name' => 'Julius',
                'last_name' => 'Randle',
                'birth_date' => '1994-11-29',
                'height' => 203,
                'weight' => 113,
                'position' => 'PF',
                'team_id' => 24, // New York Knicks
                'ppg' => 23.5,
                'apg' => 4.8,
                'rpg' => 9.4,
                'spg' => 0.9,
                'bpg' => 0.6,
                'fg_percentage' => 46.7,
                'three_p_percentage' => 34.1,
                'ft_percentage' => 79.3,
            ],
            [
                'first_name' => 'Darius',
                'last_name' => 'Garland',
                'birth_date' => '2000-01-26',
                'height' => 185,
                'weight' => 87,
                'position' => 'PG',
                'team_id' => 25, // Cleveland Cavaliers
                'ppg' => 21.9,
                'apg' => 8.1,
                'rpg' => 3.1,
                'spg' => 1.3,
                'bpg' => 0.3,
                'fg_percentage' => 47.9,
                'three_p_percentage' => 39.4,
                'ft_percentage' => 87.6,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [21, 22, 23, 24, 25])->delete();
    }
};
