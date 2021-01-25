<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_session', function (Blueprint $table) {
            $table->string('semester_id')->nullable();
            $table->string('session')->nullable();
            $table->timestamps();

//            $table->foreign('semester_id')
//                ->references('semester_id')->on('semester')
//                ->onDelete('cascade')
//                ->onUpdate('cascade');
        });

        Schema::table('semester_session', function(Blueprint $table){
            $table->primary(['semester_id', 'session']);
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
        Schema::dropIfExists('semester_session');
    }
}
