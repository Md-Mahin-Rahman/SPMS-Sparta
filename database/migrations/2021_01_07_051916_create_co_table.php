<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co', function (Blueprint $table) {
            $table->integer('co_id')->nullable();
            $table->string('course_code')->nullable();
            $table->integer('plo_id')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
        });

        Schema::table('co', function(Blueprint $table){
            $table->primary(['co_id','plo_id']);
            $table->foreign('course_code')->references('course_code')->on('course');
            $table->foreign('plo_id')->references('plo_id')->on('plo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('co');
    }
}
