<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('com_name');
            $table->string('com_logo'); 
            $table->string('com_email'); 
            $table->string('cur_format',20); 
            $table->string('clock_in_time',10)->nullable(); 
            $table->string('clock_out_time',10)->nullable(); 
        });


        DB::table('settings')->insert([
            'com_name' => 'Kaushal Nishad | HRM',
            'com_logo' => 'default.png',
            'com_email' => 'kaushalnishad@email.com',
            'cur_format' => '$',
            'clock_in_time' => '09:00',
            'clock_out_time' => '18:00'
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
