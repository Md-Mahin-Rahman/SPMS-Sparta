<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->string('course_code')->nullable();
            $table->string('dept_code')->nullable();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('cooffered_code')->nullable();
            $table->timestamps();
        });

        Schema::table('course', function(Blueprint $table){
            $table->primary('course_code');
            $table->foreign('dept_code')->references('dept_code')->on('department');
            $table->foreign('cooffered_code')->references('course_code')->on('course');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course');
    }
}
