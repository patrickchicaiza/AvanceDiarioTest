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

            $table->unsignedBigInteger('form')->nullable();
            $table->foreign('form')->references('id')->on('forms');

            $table->unsignedBigInteger('project')->nullable();
            $table->foreign('project')->references('id')->on('projects');

            $table->unsignedBigInteger('platform')->nullable();
            $table->foreign('platform')->references('id')->on('platforms');

            $table->string('epic');
            $table->string('userStory');
            $table->time('estimatedTime');
            $table->time('startTime');
            $table->time('endTime');
            $table->integer('progress');
            $table->string('images');
            $table->string('comment');
            $table->string('status');

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
