<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Nikola',
                'last_name' => 'Jokić',
                'birth_date' => '1995-02-19',
                'height' => 211,
                'weight' => 129,
                'position' => 'C',
                'team_id' => 1, // Denver Nuggets
                'ppg' => 27.1,
                'apg' => 8.4,
                'rpg' => 11.3,
                'spg' => 1.4,
                'bpg' => 0.7,
                'fg_percentage' => 56.5,
                'three_p_percentage' => 38.3,
                'ft_percentage' => 85.7,
            ],
            [
                'first_name' => 'Luka',
                'last_name' => 'Dončić',
                'birth_date' => '1999-02-28',
                'height' => 201,
                'weight' => 104,
                'position' => 'PG',
                'team_id' => 2, // Dallas Mavericks
                'ppg' => 29.7,
                'apg' => 9.1,
                'rpg' => 8.5,
                'spg' => 1.2,
                'bpg' => 0.5,
                'fg_percentage' => 48.9,
                'three_p_percentage' => 35.1,
                'ft_percentage' => 77.3,
            ],
            [
                'first_name' => 'Giannis',
                'last_name' => 'Antetokounmpo',
                'birth_date' => '1994-12-06',
                'height' => 211,
                'weight' => 110,
                'position' => 'PF',
                'team_id' => 3, // Milwaukee Bucks
                'ppg' => 28.9,
                'apg' => 5.9,
                'rpg' => 11.7,
                'spg' => 1.1,
                'bpg' => 1.3,
                'fg_percentage' => 55.3,
                'three_p_percentage' => 30.2,
                'ft_percentage' => 72.9,
            ],
            [
                'first_name' => 'Joel',
                'last_name' => 'Embiid',
                'birth_date' => '1994-03-16',
                'height' => 213,
                'weight' => 127,
                'position' => 'C',
                'team_id' => 4, // Philadelphia 76ers
                'ppg' => 30.6,
                'apg' => 4.2,
                'rpg' => 11.2,
                'spg' => 1.0,
                'bpg' => 1.7,
                'fg_percentage' => 51.3,
                'three_p_percentage' => 33.8,
                'ft_percentage' => 85.9,
            ],
            [
                'first_name' => 'Shai',
                'last_name' => 'Gilgeous-Alexander',
                'birth_date' => '1998-07-12',
                'height' => 198,
                'weight' => 82,
                'position' => 'SG',
                'team_id' => 5, // Oklahoma City Thunder
                'ppg' => 32.5,
                'apg' => 6.1,
                'rpg' => 5.1,
                'spg' => 1.9,
                'bpg' => 1.0,
                'fg_percentage' => 51.0,
                'three_p_percentage' => 35.0,
                'ft_percentage' => 90.5,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [1, 2, 3, 4, 5])->delete();
    }
};
