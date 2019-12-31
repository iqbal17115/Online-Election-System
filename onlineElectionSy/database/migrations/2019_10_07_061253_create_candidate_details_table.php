<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidate_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('eId');
            $table->string('cName'); 
            $table->string('info'); 
            $table->string('image'); 
            $table->foreign('eId')->references('id')->on('new_elections');
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
        Schema::dropIfExists('candidate_details');
    }
}
