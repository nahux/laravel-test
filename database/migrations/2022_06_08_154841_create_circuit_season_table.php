<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCircuitSeasonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('circuit_season', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('circuit_id');
            $table->foreign('circuit_id')->references('id')->on('circuit');
            $table->unsignedBigInteger('season_id');
            $table->foreign('season_id')->references('id')->on('season');
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
        Schema::dropIfExists('circuit_season');
    }
}
