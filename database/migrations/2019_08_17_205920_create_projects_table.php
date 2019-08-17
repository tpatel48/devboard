<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->string('name', 255);
            $table->dateTime('launch_date')->nullable($value = true);
            $table->dateTime('start_date')->nullable($value = true);
            $table->dateTime('close_date')->nullable($value = true);
            $table->string('account_manager', 255)->nullable($value = true);
            $table->string('project_manager', 255)->nullable($value = true);
            $table->string('lead_developer', 255)->nullable($value = true);
            $table->string('frontend_developer', 255)->nullable($value = true);
            $table->string('additional_developer', 255)->nullable($value = true);
            $table->longText('notes')->nullable($value = true);
            $table->string('tags', 255)->nullable($value = true);
            $table->unsignedInteger('status_id');
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
        Schema::dropIfExists('projects');
    }
}
