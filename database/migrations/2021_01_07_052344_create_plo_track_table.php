<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePloTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plo_track', function (Blueprint $table) {
            $table->string('student_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->string('course_code')->nullable();
            $table->integer('co_id')->nullable();
            $table->integer('plo_id')->nullable();
            $table->boolean('isAchieved')->nullable();
            $table->timestamps();
        });

        Schema::table('plo_track', function(Blueprint $table){
            $table->primary(['student_id', 'section_id', 'course_code', 'co_id', 'plo_id']);
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->foreign('section_id')->references('section_id')->on('section');
            $table->foreign('course_code')->references('course_code')->on('course');
            $table->foreign('co_id')->references('co_id')->on('co');
            $table->foreign('plo_id')->references('plo_id')->on('plo');
        });
    }


    public function down()
    {
        Schema::dropIfExists('plo_track');
    }
}
