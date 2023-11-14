<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('etudiants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('genre_id');
            $table->string('datenaissance');
            $table->string('matricule');
            $table->string('cycle_id');
            $table->string('filiere_id');
            $table->string('niveauetude_id');
            $table->string('anneeuniversitaire_id');
            $table->string('nationalite_id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirmerpassword')->nullable();
            $table->string('photo');
            $table->timestamps();

            $table->foreign('nationalite_id')->references('id')->on('nationalites');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('filiere_id')->references('id')->on('filieres');
            $table->foreign('cycle_id')->references('id')->on('cycles');
            $table->foreign('niveauetude_id')->references('id')->on('niveauetudes');
            $table->foreign('anneeuniversitaire_id')->references('id')->on('anneeuniversitaires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
