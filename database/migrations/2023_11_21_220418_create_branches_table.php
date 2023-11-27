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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('Branch_Name');
            $table->string('Branch_Address');
            $table->string('Branch_Logo');
            $table->string('Branch_Phone');
            $table->string('Branch_Email');
            $table->string('Branch_Website');
            $table->string('School_Name');
            $table->string('Stamp_Logo');
            $table->string('Header_Logo');
            $table->string('Result_Title');
            $table->string('Additional_Title');
            $table->string('GenInfo');
            $table->string('NextTerm');
            $table->string('GenNotice');
            $table->string('Stud_Adm');
            $table->string('Stf_Adm');
            $table->string('Branch_Sign');
            $table->string('Advert_Image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
