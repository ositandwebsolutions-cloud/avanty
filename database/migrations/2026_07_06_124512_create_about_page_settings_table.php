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
        Schema::create('about_page_settings', function (Blueprint $table) {
    $table->id();
    // Hero Section
    $table->string('hero_eyebrow')->default('ABOUT US');
    $table->string('hero_title_line1')->default('Built on Values.');
    $table->string('hero_title_line2_gold')->default('Defined by Purpose.');
    $table->json('hero_paragraphs'); // Stores an array of paragraphs
    $table->string('hero_image')->nullable();

    // Foundation Section
    $table->string('foundation_eyebrow')->default('OUR FOUNDATION');
    $table->string('foundation_title')->default('Building today with generations in mind.');
    $table->json('foundation_cards'); // Stores an array of the 4 foundation cards

    // Leadership Section Header
    $table->string('leadership_title')->default('Leadership');
    $table->string('leadership_eyebrow')->default('A SHARED VISION');
    $table->text('leadership_description');

    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_page_settings');
    }
};
