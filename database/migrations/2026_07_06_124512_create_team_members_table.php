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
        Schema::create('team_members', function (Blueprint $table) {
    $table->id();
    $table->string('slug')->unique(); // 'tanaz', 'jenny', 'kai'
    $table->string('name');
    $table->string('title');
    $table->integer('sort_order')->default(0);
    $table->json('bio_sections'); // Stores icons, section titles, and text contents
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team_members');
    }
};
