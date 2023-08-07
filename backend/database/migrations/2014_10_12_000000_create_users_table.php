<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name')->nullable()->default(null);
            $table->string('last_name');
            $table->timestamp('birthdate');
            $table->integer('gender');
            $table->integer('marital_status');
            $table->integer('department');
            $table->integer('position');
            $table->timestamp('hired_at')->nullable()->default(null);
            $table->timestamp('resigned_at')->nullable()->default(null);
            $table->integer('permission');
            $table->string('username')->unique();
            $table->string('password');
            $table->integer('status');
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
        Schema::dropIfExists('users');
    }
}
