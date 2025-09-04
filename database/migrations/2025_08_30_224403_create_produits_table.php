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
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->text('description')->nullable();
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('etat')->nullable();
            $table->integer('quantite')->nullable();
            $table->decimal('prix', 22, 2)->nullable();
            $table->string('lieu_achat')->nullable();
            $table->date('date_achat')->nullable();
            $table->string('fournisseur')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();

             // Ajout de la contrainte de clé étrangère
    $table->foreign('categorie_id')->references('id')->on('categories')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
