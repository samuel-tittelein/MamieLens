<?php

use App\Models\Ingredient;
use App\Models\Recette;
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
        Schema::create('compose', function (Blueprint $table) {
            $table->foreignIdFor(Ingredient::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignIdFor(Recette::class)->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->integer('quantite');
            $table->string('observation');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compose');
    }
};
