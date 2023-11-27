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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('Staff_ID')->unique(); 
            $table->string('password');
            $table->string('Fullnames', 50);
            $table->string('role', 50)->default('staff');
            $table->string('Gender', 10)->nullable();
            $table->string('DOB', 50)->nullable();
            $table->string('Health_Status', 20)->nullable();
            $table->string('Phone_No', 15)->nullable();
            $table->string('Email', 50)->nullable();
            $table->string('Next_Of_Kin', 50)->nullable();
            $table->string('Next_Of_Kin_Phone_No', 50)->nullable();
            $table->text('Address')->nullable();
            $table->text('Image')->nullable();
            $table->string('Date_Emp', 20)->nullable();
            $table->string('Term_Emp', 20)->nullable();
            $table->string('Staff_Status', 20)->nullable();
            $table->string('Date_Resigned', 20)->nullable();
            $table->string('Qualifications',20)->nullable();
            $table->string('Level', 20)->nullable();
            $table->string('Step', 20 )->nullable();
            $table->string('Emp_Type', 20)->nullable();
            $table->string('Responsibility', 50)->nullable();
            $table->string('Additional_Resp', 50)->nullable();
            $table->string('Designation', 20)->nullable();
            $table->string('Branch', 20)->nullable();
            $table->text('Mgt_Comment')->nullable();
            $table->string('Basic_Salary', 20)->nullable();
            $table->string('Sal_Nego', 50)->nullable();
            $table->string('Increment', 20)->nullable();
            $table->string('Incentive', 20)->nullable();
            $table->string('Transport', 20)->nullable();
            $table->string('House_All', 20)->nullable();
            $table->string('Feeding_All', 20)->nullable();
            $table->string('Emissary_All', 20)->nullable();
            $table->string('Add_Resp_Fee', 20)->nullable();
            $table->string('Other_Allowance', 20)->nullable();
            $table->string('Total_Salary', 20)->nullable();
            $table->string('Monthly_Salary', 20)->nullable();
            $table->string('Deductions', 20)->nullable();
            $table->string('Amt_Payable', 20)->nullable();
            $table->string('Amt_Paid', 20)->nullable();
            $table->string('Balance', 20)->nullable();
            $table->string('Loan_Bal', 20)->nullable();
            $table->string('T_Savings',20)->nullable();
            $table->string('Gratuity', 20)->nullable();
            $table->string('Gratuity_Start', 20)->nullable();
            $table->string('Total_Loan_Accu', 20)->nullable();
            $table->string('Total_Pay_Accu', 20)->nullable();
            $table->string('Monthly_Savings', 20)->nullable();
            $table->string('Gratuity_Status', 20)->nullable();
            $table->string('Saving_Status', 20)->nullable();
            $table->string('Date_Gratuity_Cleared', 20)->nullable();
            $table->string('Date_Saving_Cleared', 20)->nullable();
            $table->string('Month_', 20)->nullable();
            $table->string('Year_', 20)->nullable();
            $table->string('M_Gratuity', 20)->nullable();
            $table->string('Salary_Cap', 20)->nullable();
            $table->string('Acc_Name', 20)->nullable();
            $table->string('Acc_Number', 20)->nullable();
            $table->string('Bank_Name', 20)->nullable();
            $table->string('Grat_Cap', 20)->nullable();
            $table->string('Saving_Yes_No', 20)->nullable();
            $table->string('Loan_Yes_No', 20)->nullable();
            $table->string('Library_Penalty', 20)->nullable();
            $table->string('Month_Paid', 20)->nullable();
            $table->string('Ded', 20)->nullable();
            $table->string('PaymentOption', 20)->nullable();
            $table->string('Award', 20)->nullable();
            $table->string('Award_Total', 20)->nullable();
            $table->string('Sort_Code', 20)->nullable();
            $table->string('StaffPassword', 20)->nullable();
            $table->string('Staff_Tax', 20)->nullable();
            $table->string('G_Charges', 20)->nullable();
            $table->string('G_Balance', 20)->nullable();
            $table->string('TG_Paid', 20)->nullable();
            $table->string('S_Charges', 20)->nullable();
            $table->string('TS_Charges', 20)->nullable();
            $table->string('S_Bal', 20)->nullable();
            $table->string('T_Aids', 20)->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};