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
            $table->string('telephone');
            $table->string('heure_rappel');
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
