<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\QuestionSection;
use App\Models\QuestionOption;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('question_banks', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->string('question_text');
            // $table->foreignId('question_section_id');
            $table->foreignIdFor(QuestionSection::class);
            $table->unsignedInteger('correct_option_id');
            $table->string('correct_option_text');
            $table->boolean('active')->default(false);
            $table->timestamps();
            $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_banks');
    }
};
