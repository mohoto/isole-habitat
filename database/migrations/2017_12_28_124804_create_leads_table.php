<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->increments('id');
            $table ->integer('telephone_rappel_id')->unsigned();
            $table->foreign('telephone_rappel_id')->references('id')->on('categories')->onDelete('restrict');
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom');
            $table->string('rue');
            $table->string('ville');
            $table->string('code_postal');
            $table->string('telephone');
            $table->string('email');
            $table->string('type_chauffage');
            $table->string('type_surface');
            $table->string('type_isolation');
            $table->string('type_bail');
            $table->string('nombre_personne');
            $table->string('revenus_reference');
            $table->boolean('demande_rappel');
            $table->string('heures_rappel');
            $table->boolean('isolation_combles');
            $table->integer('isolation_combles_surface');
            $table->boolean('isolation_mur');
            $table->integer('isolation_mur_surface');
            $table->boolean('isolation_garage');
            $table->integer('isolation_garage_surface');
            $table->boolean('isolation_caves');
            $table->integer('isolation_caves_surface');
            $table->boolean('isolation_vide_sanitaire');
            $table->integer('isolation_vide_sanitaire_surface');
            $table->integer('numero_parcelle');
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
        Schema::dropIfExists('leads');
    }
}
