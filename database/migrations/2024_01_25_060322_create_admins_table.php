<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('admin_name',20);
            $table->string('admin_email',50); 
            $table->string('user_name',20); 
            $table->text('user_pass'); 
        });
    
        DB::table('admins')->insert([
            'admin_name' => 'Site Admin',
            'admin_email' => 'admin@example.com',
            'user_name' => 'admin',
            'user_pass' => Hash::make('123456')
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
