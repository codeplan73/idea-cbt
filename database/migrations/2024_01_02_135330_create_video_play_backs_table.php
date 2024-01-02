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
        Schema::create('video_play_backs', function (Blueprint $table) {
            $table->id();
            $table->string('topic');
            $table->string('subject');
            $table->string('week');
            $table->string('class');
            $table->string('term');
            $table->date('start_date');
            $table->time('start_time');
            $table->string('video');
            $table->string('file_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('video_play_backs');
    }
};
