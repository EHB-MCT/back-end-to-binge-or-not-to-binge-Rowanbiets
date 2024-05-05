<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChampionTierListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('champion_tier_lists', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('champion_name');
            $table->string('tier');
            $table->decimal('win_rate', 5, 2);
            $table->decimal('pick_rate', 5, 2);
            $table->decimal('ban_rate', 5, 2);
            $table->integer('games_played');
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
        Schema::dropIfExists('champion_tier_lists');
    }
}

