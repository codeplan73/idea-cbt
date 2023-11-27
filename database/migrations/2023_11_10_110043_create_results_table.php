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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stud_id');
            $table->foreign('stud_id')->references('id')->on('students');
            $table->string('student_id', 20);
            $table->string('Name', 100);
            $table->string('session', 20);
            $table->string('Class', 20);
            $table->string('Term', 20);
            $table->string('English', 20)->nullable();
            $table->string('Maths', 20)->nullable();
            $table->string('Civic', 20)->nullable();
            $table->string('Marketing', 20)->nullable();
            $table->string('Economics', 20)->nullable();
            $table->string('Biology', 20)->nullable();
            $table->string('Chemistry', 20)->nullable();
            $table->string('Islamic_Stud', 20)->nullable();
            $table->string('Gen_Stud', 20)->nullable();
            $table->string('Business_Stud', 20)->nullable();
            $table->string('Grammer', 20)->nullable();
            $table->string('Computer', 20)->nullable();
            $table->string('C_Arts', 20)->nullable();
            $table->string('Basic_Sc', 20)->nullable();
            $table->string('Agric_Sc', 20)->nullable();
            $table->string('Arabic', 20)->nullable();
            $table->string('Hadith', 20)->nullable();
            $table->string('Tefseer', 20)->nullable();
            $table->string('Taoheed', 20)->nullable();
            $table->string('Tarikh', 20)->nullable();
            $table->string('Qawaid', 20)->nullable();
            $table->string('Fiqh', 20)->nullable();
            $table->string('Adab', 20)->nullable();
            $table->string('Balaga', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
