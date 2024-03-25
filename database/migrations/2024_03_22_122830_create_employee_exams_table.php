<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Exam;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('employee_exams', function (Blueprint $table) {
            $table->id();
            $table->string('emp_code_exam_id_exam_num')->unique();
            $table->string('employee_code');
            $table->foreignIdFor(Exam::class);
            $table->integer('exam_num')->default(1);
            $table->string('name')->nullable();
            $table->integer('total_questions')->default(0);
            $table->integer('correct_answers')->default(0);
            $table->integer('wrong_answers')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_exams');
    }
};
