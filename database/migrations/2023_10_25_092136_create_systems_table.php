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
        Schema::create('systems', function (Blueprint $table) {
            $table->id();
            $table->string('system_id');
            $table->string('subject', 50)->nullable();
            $table->string('branch', 50)->nullable();
            $table->string('student_status', 50)->nullable();
            $table->string('staff_status', 50)->nullable();
            $table->string('class', 50)->nullable();
            $table->string('term', 50)->nullable();
            $table->string('session', 50)->nullable();
            $table->string('question_type', 50)->nullable();
            $table->string('exam_type', 50)->nullable();
            $table->string('week', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('systems');
    }
};