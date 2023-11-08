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
            $table->string('genre');
            $table->string('datenaissance');
            $table->string('matricule');
            $table->string('cycle');
            $table->string('filiere');
            $table->string('niveauetude');
            $table->string('anneeuniversitaire');
            $table->string('nationalite');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirmerpassword')->nullable();
            $table->file('photo');
            $table->timestamps();
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
