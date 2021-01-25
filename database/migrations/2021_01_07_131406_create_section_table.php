<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('section', function (Blueprint $table) {
            $table->integer('section_id')->nullable();
            $table->integer('faculty_id')->nullable();
            $table->string('course_code')->nullable();
            $table->string('semester_id')->nullable();
            $table->integer('number')->nullable();

//            $table->increments('section_id');
            $table->timestamps();
        });

        Schema::table('section', function(Blueprint $table){
            $table->primary('section_id');
            $table->foreign('faculty_id')->references('faculty_id')->on('faculty');
            $table->foreign('course_code')->references('course_code')->on('course');
            $table->foreign('semester_id')->references('semester_id')->on('semester');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('section');
    }
}
