<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plo', function (Blueprint $table) {
            $table->integer('plo_id');
            $table->string('dept_code')->nullable();
            $table->integer('plo_number')->nullable();
            $table->string('name')->nullable();

            $table->timestamps();
        });

        Schema::table('plo', function(Blueprint $table){
            $table->primary('plo_id');
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
        Schema::dropIfExists('plo');
    }
}
