<?php

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Genre;
use App\Models\Nationalite;
use App\Models\Niveauetude;
use App\Models\Tuteur;
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
        Schema::create('eleves', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom');
            $table->string('prenom');
            $table->string('telephone');
            $table->string('datenaissance');
            $table->string('matricule');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('confirmerpassword')->nullable();
            $table->string('image')->nullable();
            $table->foreignIdFor(Genre::class);
            $table->foreignIdFor(Cycle::class);
            $table->foreignIdFor(Filiere::class);
            $table->foreignIdFor(Niveauetude::class);
            $table->foreignIdFor(Anneeuniversitaire::class);
            $table->foreignIdFor(Nationalite::class);
            $table->foreignIdFor(Tuteur::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
