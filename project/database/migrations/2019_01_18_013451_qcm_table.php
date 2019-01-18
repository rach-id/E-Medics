<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class QcmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qcm', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('matiere');
	        $table->increments('description');
	        $table->increments('session');
	        $table->increments('annee');
	        $table->increments('question');
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
        Schema::dropIfExists('qcm');
    }
}
