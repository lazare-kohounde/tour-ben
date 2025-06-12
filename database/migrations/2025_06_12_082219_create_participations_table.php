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
        Schema::create('participations', function (Blueprint $table) {
            $table->id();

            // Clé étrangère vers evenements
            $table->foreignId('evenement_id')->constrained()->onDelete('cascade');

            // Clé étrangère vers utilisateurs (touristes)
            $table->foreignId('idTouriste')->constrained('users')->onDelete('cascade');

            $table->string('statutPart')->default('en_attente'); // exemple de statut
            $table->timestamp('datePart')->useCurrent();
            $table->string('motif')->nullable();
            $table->text('commentaire')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participations');
    }
};

