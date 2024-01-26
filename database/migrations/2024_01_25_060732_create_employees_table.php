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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employeeId',11);
            $table->string('emp_image')->nullable();
            $table->string('emp_name');
            $table->string('emp_dob')->nullable();
            $table->string('emp_gender')->nullable();
            $table->string('emp_phone');
            $table->string('local_address')->nullable();
            $table->string('per_address')->nullable();
            $table->string('emp_email');
            $table->text('emp_password');
            $table->string('emp_department');
            $table->string('emp_designation');
            $table->string('date_of_joining');
            $table->string('joining_salary');
            $table->tinyInteger('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
