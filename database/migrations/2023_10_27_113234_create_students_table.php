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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_ID', 20);
            $table->string('Fullnames', 50);
            $table->string('password');
            $table->string('account_status', 50);
            $table->string('ArabicName', 50)->nullable();
            $table->string('Gender', 50)->nullable();
            $table->string('DOB', 50)->nullable();
            $table->string('Current_status', 20)->nullable();
            $table->string('Date_Adm', 50)->nullable();
            $table->string('Section_Adm', 50)->nullable();
            $table->string('Class_Adm', 50)->nullable();
            $table->string('Student_Image', 50)->nullable();
            $table->string('Parent_Name', 50)->nullable();
            $table->string('Occupation', 50)->nullable();
            $table->string('Phone_Number', 50)->nullable();
            $table->string('Email', 50)->nullable();
            $table->text('Address')->nullable();
            $table->text('General_Comments')->nullable();
            $table->string('Entry_Section', 20)->nullable();
            $table->string('Previous_Debt', 20)->nullable();
            $table->integer('Debt_Amount')->length(20)->default(0)->nullable();
            $table->string('Transport_Area', 100)->nullable();
            $table->string('Student_Section', 20)->nullable();
            $table->string('Student_Class', 20)->nullable();
            $table->string('External_Exam', 50)->nullable();
            $table->string('Adm_Type', 10)->nullable();
            $table->string('Scholarship', 13)->nullable();
            $table->integer('Other_Fees')->length(10)->default(0)->nullable();
            $table->integer('Previous_Debt_Fee')->length(10)->default(0)->nullable();
            $table->integer('Entry_Fee')->length(10)->default(0)->nullable();
            $table->integer('Transport_Fee')->length(10)->default(0)->nullable();
            $table->integer('Termly_Fee')->length(10)->default(0)->nullable();
            $table->integer('Book_Fee')->length(10)->default(0)->nullable();
            $table->integer('Ext_Exam_Fee')->length(10)->default(0)->nullable();
            $table->integer('Boarding_Fee')->length(10)->default(0)->nullable();
            $table->integer('Scholarship_Fee')->length(10)->default(0)->nullable();
            $table->integer('Others_Fee')->length(10)->default(0)->nullable();
            $table->integer('Misc_Fee')->length(10)->default(0)->nullable();
            $table->integer('Total_Sch_Fee')->length(10)->default(0)->nullable();
            $table->integer('Gen_Discount')->length(10)->default(0)->nullable();
            $table->integer('Amount_Payable')->length(10)->default(0)->nullable();
            $table->integer('Amount_Paid')->length(10)->default(0)->nullable();
            $table->integer('Current_Balance')->length(10)->default(0)->nullable();
            $table->string('Date_Left', 20)->nullable();
            $table->string('Branch', 50)->nullable();
            $table->string('Online_Image', 50)->nullable();
            $table->string('Student_Pin', 25)->nullable();
            $table->string('Student_Pin2', 25)->nullable();
            $table->string('Student_Pin3', 25)->nullable();
            $table->string('Result_Status', 25)->nullable();
            $table->integer('PTA_Fee')->length(10)->default(0)->nullable();
            $table->integer('Tuition_Fee')->length(10)->default(0)->nullable();
            $table->integer('Utilities_Fee')->length(10)->default(0)->nullable();
            $table->integer('Book_Total')->length(10)->default(0)->nullable();
            $table->integer('Book_Amt_Paid')->length(10)->default(0)->nullable();
            $table->integer('Book_Balance')->length(10)->default(0)->nullable();
            $table->text('Book_Remarks')->nullable();
            $table->string('CbtClass', 20)->nullable();
            $table->string('Session_', 20)->nullable();
            $table->string('SmsStatus', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};