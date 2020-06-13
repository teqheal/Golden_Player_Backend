<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPointsEarnedToPlayerBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('player_bets', function (Blueprint $table) {
            $table->integer('points_earned')->default(0)->after('is_used_joker');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('player_bets', function (Blueprint $table) {
            $table->dropColumn('points_earned');
        });
    }
}
