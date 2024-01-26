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
        Schema::create('bank_details', function (Blueprint $table) {
            $table->id('bank_id');
            $table->string('bank_name')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('ifsc_code')->nullable();
            $table->string('branch_location')->nullable();
            $table->string('pan_number')->nullable();
            $table->string('employee_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_details');
    }
};
