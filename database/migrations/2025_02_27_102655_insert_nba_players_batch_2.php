<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Stephen',
                'last_name' => 'Curry',
                'birth_date' => '1988-03-14',
                'height' => 188,
                'weight' => 84,
                'position' => 'PG',
                'team_id' => 6, // Golden State Warriors
                'ppg' => 28.3,
                'apg' => 6.5,
                'rpg' => 5.2,
                'spg' => 1.3,
                'bpg' => 0.4,
                'fg_percentage' => 48.2,
                'three_p_percentage' => 42.7,
                'ft_percentage' => 91.5,
            ],
            [
                'first_name' => 'Kevin',
                'last_name' => 'Durant',
                'birth_date' => '1988-09-29',
                'height' => 208,
                'weight' => 109,
                'position' => 'SF',
                'team_id' => 7, // Phoenix Suns
                'ppg' => 27.8,
                'apg' => 5.3,
                'rpg' => 7.1,
                'spg' => 0.9,
                'bpg' => 1.1,
                'fg_percentage' => 53.7,
                'three_p_percentage' => 38.9,
                'ft_percentage' => 88.4,
            ],
            [
                'first_name' => 'Jayson',
                'last_name' => 'Tatum',
                'birth_date' => '1998-03-03',
                'height' => 203,
                'weight' => 95,
                'position' => 'SF',
                'team_id' => 8, // Boston Celtics
                'ppg' => 30.1,
                'apg' => 4.6,
                'rpg' => 8.8,
                'spg' => 1.0,
                'bpg' => 0.7,
                'fg_percentage' => 46.8,
                'three_p_percentage' => 37.1,
                'ft_percentage' => 86.8,
            ],
            [
                'first_name' => 'Anthony',
                'last_name' => 'Edwards',
                'birth_date' => '2001-08-05',
                'height' => 193,
                'weight' => 102,
                'position' => 'SG',
                'team_id' => 9, // Minnesota Timberwolves
                'ppg' => 27.6,
                'apg' => 5.2,
                'rpg' => 6.4,
                'spg' => 1.5,
                'bpg' => 0.6,
                'fg_percentage' => 48.9,
                'three_p_percentage' => 38.5,
                'ft_percentage' => 80.1,
            ],
            [
                'first_name' => 'Jimmy',
                'last_name' => 'Butler',
                'birth_date' => '1989-09-14',
                'height' => 201,
                'weight' => 104,
                'position' => 'SF',
                'team_id' => 10, // Miami Heat
                'ppg' => 22.1,
                'apg' => 5.4,
                'rpg' => 6.7,
                'spg' => 1.6,
                'bpg' => 0.5,
                'fg_percentage' => 49.5,
                'three_p_percentage' => 35.7,
                'ft_percentage' => 85.3,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [6, 7, 8, 9, 10])->delete();
    }
};
