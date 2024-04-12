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
        Schema::create('system_setups', function (Blueprint $table) {
            $table->id();
            $table->string('school_name')->nullable();
            $table->text('school_motto')->nullable();
            $table->string('school_logo')->nullable();
            $table->text('school_address')->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_phone')->nullable();
            $table->string('school_website')->nullable();
            $table->string('school_open_hours')->nullable();
            $table->string('school_close_hours')->nullable();
            $table->string('school_hero_title')->nullable();
            $table->string('school_hero_title_2')->nullable();
            $table->text('school_hero_text')->nullable();
            $table->string('school_about_images')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('system_setups');
    }
};