<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVideoFavoritesTable extends Migration
{
/**
* Run the migrations.
*
* @return void
*/
public function up()
{
Schema::create('user_video_favorites', function (Blueprint $table) {
$table->id();
$table->unsignedBigInteger('user_id');
$table->unsignedBigInteger('video_id');
$table->timestamps();

$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
$table->foreign('video_id')->references('id')->on('videos')->onDelete('cascade');

// Optionally, you can add unique constraint to ensure a user can't favorite the same video multiple times
// $table->unique(['user_id', 'video_id']);
});
}

/**
* Reverse the migrations.
*
* @return void
*/
public function down()
{
Schema::dropIfExists('user_video_favorites');
}
}
