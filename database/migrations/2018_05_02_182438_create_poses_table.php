<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poses', function (Blueprint $table) {
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
            $table->string('numero_declarant_avis')->nullable();
            $table->string('reference_avis_fiscal')->nullable();
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
            $table->string('rdv_jour_previsite')->nullable();
            $table->string('rdv_heure_previsite')->nullable();
            $table->date('jour_previsite')->nullable();
            $table->time('heure_previsite')->nullable();
            $table->integer('calendrier_previsite_id')->nullable();
            $table->text('commentaires')->nullable();
            $table->string('source_isolation')->nullable();
            $table->string('nom_technicien')->nullable();
            $table->string('nom_commercial')->nullable();
            $table->integer('societe_client_id')->nullable();
            $table->boolean('lead_previsite')->default(0)->nullable();
            $table->boolean('previsite_traite')->default(0)->nullable();
            $table->boolean('previsite_abondonne')->default(0)->nullable();
            $table->text('commentaires_previsite_abondonne')->nullable();
            $table->boolean('previsite_attente')->default(0)->nullable();
            $table->text('commentaires_previsite_attente')->nullable();
            $table->string('previsite_attente_heure')->default(0)->nullable();
            $table->boolean('previsite_chantier')->default(0)->nullable();
            $table->string('rdv_jour_chantier')->nullable();
            $table->string('rdv_heure_chantier')->nullable();
            $table->date('jour_chantier')->nullable();
            $table->time('heure_chantier')->nullable();
            $table->integer('calendrier_pose_id')->nullable();
            $table->boolean('chantier_traite')->default(0)->nullable();
            $table->boolean('chantier_abondonne')->default(0)->nullable();
            $table->text('commentaires_chantier_abondonne')->nullable();
            $table->boolean('chantier_attente')->default(0)->nullable();
            $table->text('commentaires_chantier_attente')->nullable();
            $table->string('chantier_attente_heure')->default(0)->nullable();
            $table->boolean('chantier_pose')->default(0)->nullable();
            $table->boolean('pose_traite')->default(0)->nullable();
            $table->boolean('pose_abondonne')->default(0)->nullable();
            $table->text('commentaires_pose_abondonne')->nullable();
            $table->boolean('pose_attente')->default(0)->nullable();
            $table->text('commentaires_pose_attente')->nullable();
            $table->string('pose_attente_heure')->default(0)->nullable();
            $table->boolean('pose_facture')->default(0)->nullable();
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
        Schema::dropIfExists('poses');
    }
}
