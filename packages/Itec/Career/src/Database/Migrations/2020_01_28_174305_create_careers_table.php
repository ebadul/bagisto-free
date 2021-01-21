<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCareersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->increments('id');

            $table->string('position')->nullable();
            $table->string('vacancy')->nullable();
            $table->text('responsibility')->nullable();
            $table->string('employment_status')->nullable();
            $table->string('skill_type')->nullable();
            $table->text('educational_requirement')->nullable();
            $table->text('aditional_requirement')->nullable();
            $table->string('job_location')->nullable();
            $table->string('salary')->nullable();
            $table->text('compensation')->nullable();
            $table->dateTime('deadline')->nullable();
            $table->string('email')->nullable();
            $table->integer('job_status')->nullable();
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
        Schema::dropIfExists('careers');
    }
}
