<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaleReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_reports', function (Blueprint $table) {
            $table->increments('id');
            $table->string('position')->nullable();
            $table->text('responsibility')->nullable();
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
        Schema::dropIfExists('sale_reports');
    }
}
