<?php

use App\Models\Anneeuniversitaire;
use App\Models\Cycle;
use App\Models\Filiere;
use App\Models\Matiere;
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
            $table->string('adhesion');
            $table->foreignIdFor(Filiere::class);
            $table->foreignIdFor(Cycle::class);
            $table->foreignIdFor(Matiere::class);
            $table->foreignIdFor(Anneeuniversitaire::class);
            $table->timestamps();
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
