<?php

use App\Models\Cycle;
use App\Models\Eleve;
use App\Models\Filiere;
use App\Models\Matiere;
use App\Models\Niveauetude;
use App\Models\Semestre;
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
        Schema::create('notes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('matricule');
            $table->foreignIdFor(Eleve::class);
            $table->foreignIdFor(Matiere::class);
            $table->foreignIdFor(Semestre::class);
            $table->foreignIdFor(Filiere::class);
            $table->foreignIdFor(Cycle::class);
            $table->foreignIdFor(Niveauetude::class);
            $table->integer('coefficient');
            $table->string('note');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
    }
};
