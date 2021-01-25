<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrerequisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prerequisite', function (Blueprint $table) {
            $table->string('course_code')->nullable();
            $table->string('prereq_code')->nullable();
            $table->timestamps();
        });

        Schema::table('prerequisite', function(Blueprint $table){
            $table->primary(['course_code','prereq_code']);
            $table->foreign('course_code')->references('course_code')->on('course');
            $table->foreign('prereq_code')->references('course_code')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prerequisite');
    }
}
