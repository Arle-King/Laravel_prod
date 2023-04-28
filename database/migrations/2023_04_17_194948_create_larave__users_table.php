<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaraveUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('larave__users', function (Blueprint $table) {
            $table->id();
            $table->string('mail');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic');
            $table->string('series');
            $table->string('number');
            $table->string('password');
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
        Schema::dropIfExists('larave__users');
    }
}
