<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('player_id')->constrained();
            $table->smallInteger('game_type')->default(0)->comment('1: Match, 2: Celeb');
            $table->smallInteger('payment_type')->default(0)->comment('1: In App, 2: PayPal');
            $table->smallInteger('payment_status')->default(0)->comment('0: Failed, 2: Success');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
