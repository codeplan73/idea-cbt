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
        Schema::create('current_term', function (Blueprint $table) {
            $table->id();
            $table->string('Current_Term');
            $table->string('Current_Session');
            $table->string('Current_Branch');
            $table->string('Current_Status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('current_term');
    }
};
