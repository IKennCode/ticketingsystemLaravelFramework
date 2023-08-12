<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tickets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longtext('description');
            $table->longtext('category');
            $table->integer('status');
            $table->integer('opened_by')->nullable()->default(null);
            $table->integer('created_by')->nullable()->default(null);
            $table->integer('updated_by')->nullable()->default(null);
            $table->integer('resolved_by')->nullable()->default(null);
            $table->integer('cancelled_by')->nullable()->default(null);
            $table->timestamps();
            $table->timestamp('resolved_at')->nullable()->default(null);
            $table->timestamp('cancelled_at')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
}
