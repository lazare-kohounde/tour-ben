<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Supprimer la contrainte étrangère
            $table->dropForeign(['evenement_id']);
            // Supprimer la colonne
            $table->dropColumn('evenement_id');
        });
    }

    public function down(): void
    {
        Schema::table('reservations', function (Blueprint $table) {
            // Recréer la colonne (nullable pour éviter problème si données manquantes)
            $table->unsignedBigInteger('evenement_id')->nullable();
            // Recréer la contrainte étrangère (adapter le nom de la table parent si besoin)
            $table->foreign('evenement_id')->references('id')->on('evenements')->onDelete('cascade');
        });
    }
};
