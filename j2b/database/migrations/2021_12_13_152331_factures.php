<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Factures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factures', function (Blueprint $table) {
            $table->id();
            $table->integer("N°Affaire");
            $table->integer("N°deStage");
            $table->integer("N°BDC");
            $table->integer("numéro_facture");
            $table->string("nom_formation");
            $table->string("nom_comedien");
            $table->string("nom_entreprise");
            $table->string("Adress_entreprise");
            $table->string("ville_formation");
            $table->string("objet_facture");
            $table->string("départ");
            $table->string("arrivée");
            $table->string("distance");
            $table->string("durée");
            $table->string("péage");
            $table->string("carburant");
            $table->string("indemnité_kilométrique");
            $table->integer("total");
            $table->rememberToken();
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
        Schema::dropIfExists('factures');
    }
}
