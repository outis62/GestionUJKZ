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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('filiere');
            $table->string('cycle');
            $table->string('matiere');
            $table->string('adhesion');
            $table->string('anneeuniversitaire');
            $table->string('role');
            $table->timestamps();

            $table->foreign('matiere')->references('id')->on('matieres');
            $table->foreign('cycle')->references('id')->on('cycles');
            $table->foreign('filiere')->references('id')->on('filieres');
            $table->foreign('anneeuniversitaire')->references('id')->on('anneeuniversitaires');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
