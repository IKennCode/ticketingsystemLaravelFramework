<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Permissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->id();
            $table->string('description', 50);
            $table->integer('status');
            $table->boolean('view_all_tickets')->nullable()->default(0);
            $table->boolean('view_my_tickets')->nullable()->default(0);
            $table->boolean('view_new_tickets')->nullable()->default(0);
            $table->boolean('view_open_tickets')->nullable()->default(0);
            $table->boolean('view_resolved_tickets')->nullable()->default(0);
            $table->boolean('view_closed_tickets')->nullable()->default(0);
            $table->boolean('view_cancelled_tickets')->nullable()->default(0);
            $table->boolean('add_tickets')->nullable()->default(0);
            $table->boolean('close_tickets')->nullable()->default(0);
            $table->boolean('cancel_tickets')->nullable()->default(0);
            $table->boolean('view_users')->nullable()->default(0);
            $table->boolean('create_users')->nullable()->default(0);
            $table->boolean('update_users')->nullable()->default(0);
            $table->boolean('disable_users')->nullable()->default(0);
            $table->boolean('view_departments')->nullable()->default(0);
            $table->boolean('create_departments')->nullable()->default(0);
            $table->boolean('update_departments')->nullable()->default(0);
            $table->boolean('disable_departments')->nullable()->default(0);
            $table->boolean('view_job_titles')->nullable()->default(0);
            $table->boolean('create_job_titles')->nullable()->default(0);
            $table->boolean('update_job_titles')->nullable()->default(0);
            $table->boolean('disable_job_titles')->nullable()->default(0);
            $table->boolean('view_permissions')->nullable()->default(0);
            $table->boolean('create_permissions')->nullable()->default(0);
            $table->boolean('update_permissions')->nullable()->default(0);
            $table->boolean('disable_permissions')->nullable()->default(0);
            $table->string('created_by')->nullable()->default(0);
            $table->string('updated_by')->nullable()->default(0);
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
        Schema::dropIfExists('permissions');
    }
}
