<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosts extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('caption');
            $table->tinyInteger('access_modifier');
            $table->boolean('is_turn_off_comment')->default(false);
            $table->string('link_id');
            $table->unsignedBigInteger('feel_id')->nullable();
            $table->foreign('feel_id')->references('id')->on('feels')->onDelete('set null');
            $table->unsignedBigInteger('act_id')->nullable();
            $table->foreign('act_id')->references('id')->on('acts')->onDelete('set null');
            $table->tinyText('checkin_position');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
