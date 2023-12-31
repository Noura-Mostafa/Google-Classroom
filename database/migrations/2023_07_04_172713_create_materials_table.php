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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('Material_Name');
            $table->date('Post_Date');
            $table->string('files_path');
            $table->string('Link');
            $table->foreignId('classroom_id')->constrained()->cascadeOnDelete(); 
            $table->foreignId('user_id')->constrained('user','id')->cascadeOnDelete(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
