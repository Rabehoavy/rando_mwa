<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRandonneesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('randonnees', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->integer('utilisateur_id');
            $table->text('nom');
            $table->string('difficulte');
            $table->string('distance');
            $table->string('duree');
            $table->string('denivele');
            $table->string('type_trajet');
            $table->string('date');
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
        Schema::dropIfExists('randonnees');
    }
}
