<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->string('program_id')->nullable();
            $table->string('name')->nullable();
            $table->string('dept_code')->nullable();
            $table->timestamps();
        });

        Schema::table('program', function(Blueprint $table){
            $table->primary('program_id');
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
        Schema::dropIfExists('program');
    }
}
