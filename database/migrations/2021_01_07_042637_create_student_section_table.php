<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentSectionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_section', function (Blueprint $table) {
            //$table->id();
            $table->integer('section_id')->nullable();
            $table->string('student_id')->nullable();
            $table->timestamps();

            $table->foreign('section_id')
                ->references('section_id')->on('section')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('student_id')
                ->references('student_id')->on('student')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('student_section', function(Blueprint $table){
            $table->primary(['section_id', 'student_id']);
//            $table->foreign('section_id')->references('section_id')->on('section');
//            $table->foreign('student_id')->references('student_id')->on('student');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_section');
    }
}
