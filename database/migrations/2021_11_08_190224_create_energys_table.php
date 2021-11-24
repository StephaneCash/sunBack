<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnergysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('energys', function (Blueprint $table) {
            $table->id();
            $table->string("etatCharge");
            $table->string("consommation");
            $table->string("statutCharge");
            $table->string("humidity");
            $table->string("tempPann");
            $table->string("tempAmb");
            $table->string("cycleCharge");
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
        Schema::dropIfExists('energys');
    }
}