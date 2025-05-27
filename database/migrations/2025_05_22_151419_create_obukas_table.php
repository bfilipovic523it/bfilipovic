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
        Schema::create('obukas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kategorija_id')->on('kategorijas')->onDelete('cascade');
            $table->string('naziv');
            $table->text('opis');
            $table->decimal('cena', 8, 2);
            $table->string('slika')->nullable();
            $table->boolean('istaknuta')->default(false); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obukas');
    }
};
