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
            $table->string('last_name')->nullable()->default(null);
            $table->timestamp('birthdate')->nullable()->default(null);
            $table->integer('gender')->nullable()->default(null);
            $table->integer('marital_status')->nullable()->default(null);
            $table->integer('department')->nullable()->default(null);
            $table->integer('job_title')->nullable()->default(null);
            $table->timestamp('hired_at')->nullable()->default(null);
            $table->timestamp('resigned_at')->nullable()->default(null);
            $table->integer('permission')->nullable()->default(null);
            $table->string('username')->unique()->nullable()->default(null);
            $table->string('password')->nullable()->default(null);
            $table->integer('status')->nullable()->default(null);
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
