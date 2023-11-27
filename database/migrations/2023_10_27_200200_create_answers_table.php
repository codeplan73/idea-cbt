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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stud_id');
            $table->foreign('stud_id')->references('id')->on('students');
            $table->string('student_id', 20);
            $table->string('name', 50);
            $table->string('class', 20);
            $table->string('branch', 20);
            $table->string('term', 20);
            $table->string('session', 20);
            $table->string('exam_id', 20);
            $table->string('subject', 20);
            $table->string('question_type', 20);
            $table->string('test1', 20)->nullable();
            $table->string('test2', 20)->nullable();
            $table->string('test3', 20)->nullable();
            $table->string('exam', 20)->nullable();
            $table->string('test1_score', 20)->nullable();
            $table->string('test2_score', 20)->nullable();
            $table->string('test3_score', 20)->nullable();
            $table->string('exam_score', 20)->nullable();
            $table->string('total', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};