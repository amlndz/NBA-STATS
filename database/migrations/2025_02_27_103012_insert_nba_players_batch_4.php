<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration {
    public function up(): void
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Victor',
                'last_name' => 'Wembanyama',
                'birth_date' => '2004-01-04',
                'height' => 224,
                'weight' => 95,
                'position' => 'C',
                'team_id' => 16, // San Antonio Spurs
                'ppg' => 22.9,
                'apg' => 3.4,
                'rpg' => 9.5,
                'spg' => 1.2,
                'bpg' => 3.8,
                'fg_percentage' => 47.2,
                'three_p_percentage' => 33.4,
                'ft_percentage' => 82.3,
            ],
            [
                'first_name' => 'Donovan',
                'last_name' => 'Mitchell',
                'birth_date' => '1996-09-07',
                'height' => 185,
                'weight' => 98,
                'position' => 'SG',
                'team_id' => 17, // Cleveland Cavaliers
                'ppg' => 27.1,
                'apg' => 5.3,
                'rpg' => 4.2,
                'spg' => 1.7,
                'bpg' => 0.4,
                'fg_percentage' => 46.8,
                'three_p_percentage' => 39.0,
                'ft_percentage' => 87.5,
            ],
            [
                'first_name' => 'Karl-Anthony',
                'last_name' => 'Towns',
                'birth_date' => '1995-11-15',
                'height' => 211,
                'weight' => 112,
                'position' => 'C',
                'team_id' => 18, // Minnesota Timberwolves
                'ppg' => 25.4,
                'apg' => 4.1,
                'rpg' => 9.7,
                'spg' => 1.0,
                'bpg' => 1.4,
                'fg_percentage' => 50.9,
                'three_p_percentage' => 39.3,
                'ft_percentage' => 83.8,
            ],
            [
                'first_name' => 'Bam',
                'last_name' => 'Adebayo',
                'birth_date' => '1997-07-18',
                'height' => 206,
                'weight' => 116,
                'position' => 'C',
                'team_id' => 19, // Miami Heat
                'ppg' => 21.8,
                'apg' => 3.2,
                'rpg' => 10.1,
                'spg' => 1.4,
                'bpg' => 1.1,
                'fg_percentage' => 53.5,
                'three_p_percentage' => 31.8,
                'ft_percentage' => 78.9,
            ],
            [
                'first_name' => 'Zion',
                'last_name' => 'Williamson',
                'birth_date' => '2000-07-06',
                'height' => 198,
                'weight' => 129,
                'position' => 'PF',
                'team_id' => 20, // New Orleans Pelicans
                'ppg' => 26.5,
                'apg' => 4.8,
                'rpg' => 7.9,
                'spg' => 1.1,
                'bpg' => 0.9,
                'fg_percentage' => 58.2,
                'three_p_percentage' => 34.1,
                'ft_percentage' => 75.7,
            ],
        ]);
    }

    public function down(): void
    {
        DB::table('players')->whereIn('team_id', [16, 17, 18, 19, 20])->delete();
    }
};
