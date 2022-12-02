<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->foreign('project_id')->references('id')->on('projects');

            $table->string('project_name');
         

            $table->unsignedBigInteger('platform_id')->nullable();
            $table->foreign('platform_id')->references('id')->on('platforms');
            $table->string('platform_name');

            $table->unsignedBigInteger('form_id')->nullable();
            $table->foreign('form_id')->references('id')->on('forms');

         


            $table->string('epic');
            $table->string('userStory');
            $table->time('estimatedTime');
            $table->time('startTime');
            $table->time('endTime');
            $table->string('progress');
            $table->string('images');
            $table->string('status');
            $table->string('comment');

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
        Schema::dropIfExists('details');
    }
};
