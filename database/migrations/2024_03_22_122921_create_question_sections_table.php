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
        Schema::create('question_sections', function (Blueprint $table) {
            $table->id();
            $table->string('section_title');
            $table->integer('question_for_section')->default(5);
            $table->integer('time_for_section')->default(300000);
            $table->integer('order')->default(0);
            $table->boolean('active')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_sections');
    }
};
