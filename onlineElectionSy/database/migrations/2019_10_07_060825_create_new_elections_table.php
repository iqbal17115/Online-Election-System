<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewElectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_elections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();  
            $table->string('date');  
            $table->string('endDate')->default('On going!');  
            $table->integer('noOfCandidate');  
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
        Schema::dropIfExists('new_elections');
    }
}
