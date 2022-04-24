<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagUsersTable extends Migration
{
    public function up()
    {
        Schema::create('tag_users', function (Blueprint $table) {
            $table->id();

            //

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tag_users');
    }
}
