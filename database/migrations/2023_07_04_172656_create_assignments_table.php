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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id();
            $table->string('assignment_Name');
            $table->string('details');
            $table->date('Post_Date');
            $table->date('dueDate')->nullable()->default(null);
            $table->string('Link');
            $table->integer('mark')->nullable();
            $table->foreignId('classroom_id')->constrained()->cascadeOnDelete(); 
            $table->foreignId('user_id')->constrained('user','id')->cascadeOnDelete(); 
            $table->enum('status',['notSubmitted','submitted'])->default('notSubmitted');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
