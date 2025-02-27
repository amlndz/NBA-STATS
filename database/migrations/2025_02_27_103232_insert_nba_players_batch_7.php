<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Mikal',
                'last_name' => 'Bridges',
                'birth_date' => '1996-08-30',
                'height' => 198,
                'weight' => 95,
                'position' => 'SF',
                'team_id' => 31, // Brooklyn Nets
                'ppg' => 21.4,
                'apg' => 3.8,
                'rpg' => 4.6,
                'spg' => 1.2,
                'bpg' => 0.5,
                'fg_percentage' => 47.9,
                'three_p_percentage' => 39.1,
                'ft_percentage' => 86.3,
            ],
            [
                'first_name' => 'Kristaps',
                'last_name' => 'Porziņģis',
                'birth_date' => '1995-08-02',
                'height' => 221,
                'weight' => 109,
                'position' => 'C',
                'team_id' => 32, // Boston Celtics
                'ppg' => 20.5,
                'apg' => 2.8,
                'rpg' => 7.1,
                'spg' => 0.9,
                'bpg' => 2.1,
                'fg_percentage' => 50.3,
                'three_p_percentage' => 38.7,
                'ft_percentage' => 82.5,
            ],
            [
                'first_name' => 'Jalen',
                'last_name' => 'Williams',
                'birth_date' => '2001-04-14',
                'height' => 196,
                'weight' => 95,
                'position' => 'SF',
                'team_id' => 33, // Oklahoma City Thunder
                'ppg' => 19.8,
                'apg' => 5.1,
                'rpg' => 6.2,
                'spg' => 1.4,
                'bpg' => 0.8,
                'fg_percentage' => 49.2,
                'three_p_percentage' => 36.9,
                'ft_percentage' => 81.6,
            ],
            [
                'first_name' => 'Scottie',
                'last_name' => 'Barnes',
                'birth_date' => '2001-08-01',
                'height' => 203,
                'weight' => 102,
                'position' => 'SF',
                'team_id' => 34, // Toronto Raptors
                'ppg' => 20.3,
                'apg' => 5.5,
                'rpg' => 7.3,
                'spg' => 1.6,
                'bpg' => 1.1,
                'fg_percentage' => 48.1,
                'three_p_percentage' => 35.4,
                'ft_percentage' => 80.9,
            ],
            [
                'first_name' => 'Chet',
                'last_name' => 'Holmgren',
                'birth_date' => '2002-05-01',
                'height' => 213,
                'weight' => 95,
                'position' => 'C',
                'team_id' => 35, // Oklahoma City Thunder
                'ppg' => 18.9,
                'apg' => 3.4,
                'rpg' => 8.7,
                'spg' => 0.9,
                'bpg' => 2.8,
                'fg_percentage' => 50.2,
                'three_p_percentage' => 38.5,
                'ft_percentage' => 82.1,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [31, 32, 33, 34, 35])->delete();
    }
};
