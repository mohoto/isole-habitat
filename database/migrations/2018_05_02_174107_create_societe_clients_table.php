<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocieteClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('societe_clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom')->nullable();
            $table->string('adresse_rue')->nullable();
            $table->string('adresse_code_postal')->nullable();
            $table->string('adresse_ville')->nullable();
            $table->string('telephone')->nullable();
            $table->string('nom_contact')->nullable();
            $table->string('numero_tva')->nullable();
            $table->string('regions')->nullable();
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
        Schema::dropIfExists('societe_clients');
    }
}
