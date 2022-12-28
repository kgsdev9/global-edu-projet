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
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('entreprise_name')->nullable();
            $table->enum('status', [ 'urgent', 'recent'])->nullable();
            $table->text('description');
            $table->string('email')->nullable();
            $table->date('date_publication')->nullable();
            $table->string('telephone')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('region_id');
            $table->unsignedBigInteger('type_job_id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('type_job_id')->references('id')->on('type_jobs');
            $table->date('limit_date');
            $table->string('code');
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
