<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientRappelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rappelWeb', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civilite');
            $table->string('nom');
            $table->string('ville')->nullable();
            $table->string('codePostal')->nullable();
            $table->string('departement')->nullable();
            $table->string('telephone_mobile')->nullable();
            $table->string('telephone_fixe')->nullable();
            $table->string('heure_rappel');
            $table->boolean('traité')->default(0)->nullable();
            $table->boolean('abondonné')->default(0)->nullable();
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
        Schema::dropIfExists('rappelWeb');
    }
}
