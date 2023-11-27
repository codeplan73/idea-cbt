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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question_id', 20)->unique();
            $table->string('question_status', 20);
            $table->string('subject_teacher', 50);
            $table->string('total_question', 20);
            $table->string('question_type', 50);
            $table->string('exam_type', 50);
            $table->string('session', 20);
            $table->string('term', 20);
            $table->string('class', 20);
            $table->string('subject', 20);
            $table->string('alloted_mark', 20);
            $table->string('total_mark', 20);
            $table->string('time_minutes', 50);
            $table->text('question_pdf');
            $table->string('q1', 11)->nullable();
            $table->string('q2', 11)->nullable();
            $table->string('q3', 11)->nullable();
            $table->string('q4', 11)->nullable();
            $table->string('q5', 11)->nullable();
            $table->string('q6', 11)->nullable();
            $table->string('q7', 11)->nullable();
            $table->string('q8', 11)->nullable();
            $table->string('q9', 11)->nullable();
            $table->string('q10', 11)->nullable();
            $table->string('q11', 11)->nullable();
            $table->string('q12', 11)->nullable();
            $table->string('q13', 11)->nullable();
            $table->string('q14', 11)->nullable();
            $table->string('q15', 11)->nullable();
            $table->string('q16', 11)->nullable();
            $table->string('q17', 11)->nullable();
            $table->string('q18', 11)->nullable();
            $table->string('q19', 11)->nullable();
            $table->string('q20', 11)->nullable();
            $table->string('q21', 11)->nullable();
            $table->string('q22', 11)->nullable();
            $table->string('q23', 11)->nullable();
            $table->string('q24', 11)->nullable();
            $table->string('q25', 11)->nullable();
            $table->string('q26', 11)->nullable();
            $table->string('q27', 11)->nullable();
            $table->string('q28', 11)->nullable();
            $table->string('q29', 11)->nullable();
            $table->string('q30', 11)->nullable();
            $table->string('q31', 11)->nullable();
            $table->string('q32', 11)->nullable();
            $table->string('q33', 11)->nullable();
            $table->string('q34', 11)->nullable();
            $table->string('q35', 11)->nullable();
            $table->string('q36', 11)->nullable();
            $table->string('q37', 11)->nullable();
            $table->string('q38', 11)->nullable();
            $table->string('q39', 11)->nullable();
            $table->string('q40', 11)->nullable();
            $table->string('q41', 11)->nullable();
            $table->string('q42', 11)->nullable();
            $table->string('q43', 11)->nullable();
            $table->string('q44', 11)->nullable();
            $table->string('q45', 11)->nullable();
            $table->string('q46', 11)->nullable();
            $table->string('q47', 11)->nullable();
            $table->string('q48', 11)->nullable();
            $table->string('q49', 11)->nullable();
            $table->string('q50', 11)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};