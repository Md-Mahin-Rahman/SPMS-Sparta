<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answer', function (Blueprint $table) {
            $table->integer('answer_id')->nullable();
            $table->string('student_id')->nullable();
            $table->integer('question_id')->nullable();
            $table->integer('marks_obtained')->nullable();

//            $table->increments('answer_id');
            $table->timestamps();
        });

        Schema::table('answer', function(Blueprint $table){
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->foreign('question_id')->references('question_id')->on('question_bank');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answer');
    }
}
