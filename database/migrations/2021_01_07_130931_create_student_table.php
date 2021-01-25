<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->string('student_id')->nullable();
            $table->string('dept_code')->nullable();
            $table->string('name')->nullable();
            $table->float('cgpa')->nullable();
            $table->timestamps();
        });

        Schema::table('student', function(Blueprint $table){
            $table->primary('student_id');
            $table->foreign('dept_code')->references('dept_code')->on('department');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
