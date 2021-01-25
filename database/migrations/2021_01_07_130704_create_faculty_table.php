<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->integer('faculty_id')->nullable();
            $table->string('dept_code')->nullable();
            $table->string('name')->nullable();
            $table->timestamps();
        });

        Schema::table('faculty', function(Blueprint $table){
            $table->primary('faculty_id');
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
        Schema::dropIfExists('faculty');
    }
}
