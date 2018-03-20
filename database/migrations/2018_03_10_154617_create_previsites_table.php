<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrevisitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previsites', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civilite');
            $table->string('nom');
            $table->string('prenom')->nullable();
            $table->string('telephone_fixe')->nullable();
            $table->string('telephone_mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('rue');
            $table->string('ville');
            $table->string('codePostal');
            $table->string('departement');
            $table->string('revenu_fiscal')->nullable();
            $table->string('situation_eligible')->default('grand-précaire');
            $table->string('nombre_personne')->nullable();
            $table->string('type_bail')->default('propriétaire');
            $table->string('chauffage');
            $table->string('surface_maison')->nullable();
            $table->boolean('isolation_combles')->default(false)->nullable();
            $table->tinyInteger('isolation_combles_surface')->nullable();
            $table->string('isolation_combles_accee')->default('inconnu')->nullable();
            $table->string('isolation_combles_type')->default('inconnu')->nullable();
            $table->boolean('isolation_garage')->default(false)->nullable();
            $table->tinyInteger('isolation_garages_surface')->nullable();
            $table->boolean('isolation_caves')->default(false)->nullable();
            $table->tinyInteger('isolation_caves_surface')->nullable();
            $table->boolean('cave_voutee')->default(false)->nullable();
            $table->tinyInteger('isolation_voutee_surface')->nullable();
            $table->string('rdv_jour')->nullable();
            $table->string('rdv_heure')->nullable();
            $table->text('commentaires')->nullable();
            $table->string('source_isolation')->nullable();
            $table->string('nom_technicien')->nullable();
            $table->string('nom_commercial')->nullable();
            $table->boolean('lead_traite')->default(0)->nullable();
            $table->boolean('lead_abondonne')->default(0)->nullable();
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
        Schema::dropIfExists('previsites');
    }
}
