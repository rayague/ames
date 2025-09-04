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
        Schema::table('produits', function (Blueprint $table) {
  // Supprimer la colonne string 'categorie' si elle existe
  if (Schema::hasColumn('produits', 'categorie')) {
    $table->dropColumn('categorie');
}

// Ajouter la colonne categorie_id seulement si elle n'existe pas déjà
if (!Schema::hasColumn('produits', 'categorie_id')) {
    $table->unsignedBigInteger('categorie_id')->nullable()->after('nom');

    $table->foreign('categorie_id')
        ->references('id')->on('categories')
        ->onDelete('set null');
}
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('produits', function (Blueprint $table) {
              // Supprimer la clé étrangère et la colonne categorie_id
              $table->dropForeign(['categorie_id']);
              $table->dropColumn('categorie_id');

              // Ajouter la colonne string categorie
              $table->string('categorie')->after('nom');
        });
    }
};
