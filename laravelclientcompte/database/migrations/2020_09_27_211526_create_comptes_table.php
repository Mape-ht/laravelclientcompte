<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clientmorals_id')->unsigned();
            $table->foreign('clientmorals_id')->references('id')->on('clientmorals');
            $table->integer('clientphysiques_id')->unsigned();
            $table->foreign('clientphysiques_id')->references('id')->on('clientphysiques');
            $table->string('numero');
            $table->string('clerib');
            $table->string('typecompte');
            $table->string('typefrais');
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
        Schema::dropIfExists('comptes');
    }
}
