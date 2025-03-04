<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        DB::table('teams')->insert([
            ['name' => 'Atlanta Hawks', 'city' => 'Atlanta', 'abbreviation' => 'ATL', 'conference' => 'East', 'division' => 'Southeast'],
            ['name' => 'Boston Celtics', 'city' => 'Boston', 'abbreviation' => 'BOS', 'conference' => 'East', 'division' => 'Atlantic'],
            ['name' => 'Brooklyn Nets', 'city' => 'Brooklyn', 'abbreviation' => 'BKN', 'conference' => 'East', 'division' => 'Atlantic'],
            ['name' => 'Charlotte Hornets', 'city' => 'Charlotte', 'abbreviation' => 'CHA', 'conference' => 'East', 'division' => 'Southeast'],
            ['name' => 'Chicago Bulls', 'city' => 'Chicago', 'abbreviation' => 'CHI', 'conference' => 'East', 'division' => 'Central'],
            ['name' => 'Cleveland Cavaliers', 'city' => 'Cleveland', 'abbreviation' => 'CLE', 'conference' => 'East', 'division' => 'Central'],
            ['name' => 'Dallas Mavericks', 'city' => 'Dallas', 'abbreviation' => 'DAL', 'conference' => 'West', 'division' => 'Southwest'],
            ['name' => 'Denver Nuggets', 'city' => 'Denver', 'abbreviation' => 'DEN', 'conference' => 'West', 'division' => 'Northwest'],
            ['name' => 'Detroit Pistons', 'city' => 'Detroit', 'abbreviation' => 'DET', 'conference' => 'East', 'division' => 'Central'],
            ['name' => 'Golden State Warriors', 'city' => 'San Francisco', 'abbreviation' => 'GSW', 'conference' => 'West', 'division' => 'Pacific'],
            ['name' => 'Houston Rockets', 'city' => 'Houston', 'abbreviation' => 'HOU', 'conference' => 'West', 'division' => 'Southwest'],
            ['name' => 'Indiana Pacers', 'city' => 'Indianapolis', 'abbreviation' => 'IND', 'conference' => 'East', 'division' => 'Central'],
            ['name' => 'LA Clippers', 'city' => 'Los Angeles', 'abbreviation' => 'LAC', 'conference' => 'West', 'division' => 'Pacific'],
            ['name' => 'Los Angeles Lakers', 'city' => 'Los Angeles', 'abbreviation' => 'LAL', 'conference' => 'West', 'division' => 'Pacific'],
            ['name' => 'Memphis Grizzlies', 'city' => 'Memphis', 'abbreviation' => 'MEM', 'conference' => 'West', 'division' => 'Southwest'],
            ['name' => 'Miami Heat', 'city' => 'Miami', 'abbreviation' => 'MIA', 'conference' => 'East', 'division' => 'Southeast'],
            ['name' => 'Milwaukee Bucks', 'city' => 'Milwaukee', 'abbreviation' => 'MIL', 'conference' => 'East', 'division' => 'Central'],
            ['name' => 'Minnesota Timberwolves', 'city' => 'Minneapolis', 'abbreviation' => 'MIN', 'conference' => 'West', 'division' => 'Northwest'],
            ['name' => 'New Orleans Pelicans', 'city' => 'New Orleans', 'abbreviation' => 'NOP', 'conference' => 'West', 'division' => 'Southwest'],
            ['name' => 'New York Knicks', 'city' => 'New York', 'abbreviation' => 'NYK', 'conference' => 'East', 'division' => 'Atlantic'],
            ['name' => 'Oklahoma City Thunder', 'city' => 'Oklahoma City', 'abbreviation' => 'OKC', 'conference' => 'West', 'division' => 'Northwest'],
            ['name' => 'Orlando Magic', 'city' => 'Orlando', 'abbreviation' => 'ORL', 'conference' => 'East', 'division' => 'Southeast'],
            ['name' => 'Philadelphia 76ers', 'city' => 'Philadelphia', 'abbreviation' => 'PHI', 'conference' => 'East', 'division' => 'Atlantic'],
            ['name' => 'Phoenix Suns', 'city' => 'Phoenix', 'abbreviation' => 'PHX', 'conference' => 'West', 'division' => 'Pacific'],
            ['name' => 'Portland Trail Blazers', 'city' => 'Portland', 'abbreviation' => 'POR', 'conference' => 'West', 'division' => 'Northwest'],
            ['name' => 'Sacramento Kings', 'city' => 'Sacramento', 'abbreviation' => 'SAC', 'conference' => 'West', 'division' => 'Pacific'],
            ['name' => 'San Antonio Spurs', 'city' => 'San Antonio', 'abbreviation' => 'SAS', 'conference' => 'West', 'division' => 'Southwest'],
            ['name' => 'Toronto Raptors', 'city' => 'Toronto', 'abbreviation' => 'TOR', 'conference' => 'East', 'division' => 'Atlantic'],
            ['name' => 'Utah Jazz', 'city' => 'Salt Lake City', 'abbreviation' => 'UTA', 'conference' => 'West', 'division' => 'Northwest'],
            ['name' => 'Washington Wizards', 'city' => 'Washington', 'abbreviation' => 'WAS', 'conference' => 'East', 'division' => 'Southeast'],
        ]);
    }

    public function down(): void
    {
        DB::table('teams')->truncate();
    }
};
