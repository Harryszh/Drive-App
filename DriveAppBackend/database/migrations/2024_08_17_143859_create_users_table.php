<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('company')->nullable(); // Optional, falls nicht für alle notwendig
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role'); // 'client' oder 'courier'
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}