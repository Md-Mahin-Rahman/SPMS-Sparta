<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionBankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_bank', function (Blueprint $table) {
            $table->integer('question_id')->nullable();
            $table->integer('section_id')->nullable();
            $table->integer('co_id')->nullable();
            $table->string('exam_type')->nullable();
            $table->integer('question_number')->nullable();
            $table->integer('marks')->nullable();
            $table->integer('plo_id')->nullable();

//            $table->increments('question_id');
            $table->timestamps();
        });

        Schema::table('question_bank', function(Blueprint $table){
            $table->primary('question_id');

            $table->foreign('section_id')->references('section_id')->on('section');
//            $table->foreign('co_id')->references('co_id')->on('co');
//            $table->foreign('plo_id')->references('plo_id')->on('co');
            $table->foreign(array('co_id','plo_id'))
                ->references(array('co_id','plo_id',))
                ->on('co');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_bank');
    }
}
