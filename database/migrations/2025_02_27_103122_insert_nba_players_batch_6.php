<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Zach',
                'last_name' => 'LaVine',
                'birth_date' => '1995-03-10',
                'height' => 196,
                'weight' => 91,
                'position' => 'SG',
                'team_id' => 26, // Chicago Bulls
                'ppg' => 25.1,
                'apg' => 4.3,
                'rpg' => 4.9,
                'spg' => 1.1,
                'bpg' => 0.5,
                'fg_percentage' => 48.1,
                'three_p_percentage' => 39.7,
                'ft_percentage' => 85.9,
            ],
            [
                'first_name' => 'De\'Aaron',
                'last_name' => 'Fox',
                'birth_date' => '1997-12-20',
                'height' => 191,
                'weight' => 84,
                'position' => 'PG',
                'team_id' => 27, // Sacramento Kings
                'ppg' => 26.4,
                'apg' => 6.8,
                'rpg' => 4.2,
                'spg' => 1.5,
                'bpg' => 0.6,
                'fg_percentage' => 47.5,
                'three_p_percentage' => 35.9,
                'ft_percentage' => 81.2,
            ],
            [
                'first_name' => 'Tyler',
                'last_name' => 'Herro',
                'birth_date' => '2000-01-20',
                'height' => 196,
                'weight' => 88,
                'position' => 'SG',
                'team_id' => 28, // Miami Heat
                'ppg' => 22.1,
                'apg' => 4.1,
                'rpg' => 5.3,
                'spg' => 0.9,
                'bpg' => 0.3,
                'fg_percentage' => 45.6,
                'three_p_percentage' => 39.2,
                'ft_percentage' => 86.7,
            ],
            [
                'first_name' => 'Jaren',
                'last_name' => 'Jackson Jr.',
                'birth_date' => '1999-09-15',
                'height' => 211,
                'weight' => 110,
                'position' => 'PF',
                'team_id' => 29, // Memphis Grizzlies
                'ppg' => 20.9,
                'apg' => 2.7,
                'rpg' => 6.8,
                'spg' => 1.3,
                'bpg' => 3.1,
                'fg_percentage' => 49.8,
                'three_p_percentage' => 37.6,
                'ft_percentage' => 81.5,
            ],
            [
                'first_name' => 'Cade',
                'last_name' => 'Cunningham',
                'birth_date' => '2001-09-25',
                'height' => 201,
                'weight' => 100,
                'position' => 'PG',
                'team_id' => 30, // Detroit Pistons
                'ppg' => 23.2,
                'apg' => 7.1,
                'rpg' => 5.6,
                'spg' => 1.4,
                'bpg' => 0.9,
                'fg_percentage' => 46.1,
                'three_p_percentage' => 38.3,
                'ft_percentage' => 84.2,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [26, 27, 28, 29, 30])->delete();
    }
};
