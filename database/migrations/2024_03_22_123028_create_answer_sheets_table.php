<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\EmployeeExam;
use App\Models\Exam;
use App\Models\QuestionOption;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('answer_sheets', function (Blueprint $table) {
            $table->id();
            $table->string('employee_code');
            // $table->foreignId('employee_exam_id');
            $table->foreignIdFor(EmployeeExam::class);
            // $table->foreignId('exam_id');
            $table->foreignIdFor(Exam::class);
            $table->string('question_text')->nullable();
            $table->string('selected_option_text')->nullable();
            $table->foreignIdFor(QuestionOption::class);
            $table->string('correct_option_text');
            $table->boolean('is_correct_answer')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answer_sheets');
    }
};
