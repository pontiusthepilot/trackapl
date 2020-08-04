<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('title');
            $table->string('slug');
            $table->string('location');
            $table->string('postcode')->nullable();
            $table->string('reference')->nullable();
            $table->string('jobid')->nullable();
            $table->integer('agencyid')->nullable();
            $table->integer('agentid')->nullable();
            $table->integer('employerid')->nullable();
            $table->integer('contactid')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
