<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerformancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('performances', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('course_id')->nullable();
            $table->string('section')->nullable();
            $table->string('semester')->nullable();
            $table->string('m_co1_q1')->nullable();
            $table->string('m_co1_q2')->nullable();
            $table->string('m_co1_q3')->nullable();
            $table->string('m_co2_q4')->nullable();
            $table->string('m_co1_q5')->nullable();
            $table->string('m_co1_q6')->nullable();
            $table->string('f_co1_q1')->nullable();
//            $table->string('f_co1_q2')->nullable();
//            $table->string('f_co2_q3')->nullable();
//            $table->string('f_co3_q4')->nullable();
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
        Schema::dropIfExists('performances');
    }
}
