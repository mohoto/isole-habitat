<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_forms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('civilite');
            $table->string('nom');
            $table->string('type_habitation')->nullable();
            $table->string('prenom')->nullable();
            $table->string('telephone_mobile')->nullable();
            $table->string('telephone_fixe')->nullable();
            $table->string('email')->nullable();
            $table->string('ville');
            $table->string('codePostal');
            $table->string('departement');
            $table->string('rue')->nullable();
            $table->string('revenu_fiscal');
            $table->string('numero_declarant_avis')->nullable();
            $table->string('reference_avis_fiscal')->nullable();
            $table->tinyInteger('nombre_personne');
            $table->string('type_bail')->default('propriétaire');
            $table->string('chauffage');
            $table->string('situation');
            $table->string('surface_maison')->nullable();
            $table->boolean('isolation_combles')->default(0)->nullable();
            $table->boolean('isolation_garage')->default(0)->nullable();
            $table->boolean('isolation_caves')->default(0)->nullable();
            $table->boolean('cave_voutee')->nullable();
            $table->string('heure_rappel')->nullable();
            $table->boolean('lead_traite')->default(0)->nullable();
            $table->boolean('lead_abondonne')->default(0)->nullable();
            $table->boolean('lead_attente')->default(0)->nullable();
            $table->string('lead_attente_heure')->default(0)->nullable();
            $table->text('lead_attente_commentaires')->nullable();
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
        Schema::dropIfExists('client_forms');
    }
}
