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
    Schema::create('pokedexs', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('type');
        $table->string('species');
        $table->string('image_url');
        
        $table->integer('height')->default(0); 
        $table->integer('weight')->default(0);
        $table->integer('hp')->default(0);
        $table->integer('attack')->default(0);
        $table->integer('defense')->default(0);

        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pokedexes');
    }
};
