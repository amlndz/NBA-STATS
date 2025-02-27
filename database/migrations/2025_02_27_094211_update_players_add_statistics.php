<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('players', function (Blueprint $table) {
            // 📊 Añadir estadísticas clave
            $table->decimal('ppg', 4, 1)->default(0)->comment('Puntos por partido')->after('team_id');
            $table->decimal('apg', 4, 1)->default(0)->comment('Asistencias por partido')->after('ppg');
            $table->decimal('rpg', 4, 1)->default(0)->comment('Rebotes por partido')->after('apg');
            $table->decimal('spg', 4, 1)->default(0)->comment('Robos por partido')->after('rpg');
            $table->decimal('bpg', 4, 1)->default(0)->comment('Tapones por partido')->after('spg');
            $table->decimal('fg_percentage', 4, 1)->default(0)->comment('Porcentaje de tiros de campo')->after('bpg');
            $table->decimal('three_p_percentage', 4, 1)->default(0)->comment('Porcentaje de triples')->after('fg_percentage');
            $table->decimal('ft_percentage', 4, 1)->default(0)->comment('Porcentaje de tiros libres')->after('three_p_percentage');
        });
    }

    public function down(): void
    {
        Schema::table('players', function (Blueprint $table) {
            $table->dropColumn([
                'ppg',
                'apg',
                'rpg',
                'spg',
                'bpg',
                'fg_percentage',
                'three_p_percentage',
                'ft_percentage'
            ]);
        });
    }
};
