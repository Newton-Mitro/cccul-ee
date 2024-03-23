<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\AnswerSheetController;
use App\Http\Controllers\QuestionBankController;
use App\Http\Controllers\QuestionSectionController;
use App\Http\Controllers\EmployeeExamController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::ApiResource('exams', ExamController::class);
Route::get('active_exam', [ExamController::class, 'activeExam'])->name('exams.activeExam');

Route::ApiResource('answer-sheets', AnswerSheetController::class);

Route::ApiResource('question-banks', QuestionBankController::class);
Route::get('question-banks/section/{section_id}/{limit}', [QuestionBankController::class, 'getQuestionsBySection'])->name('question-banks.getQuestionsBySection');

Route::ApiResource('question-sections', QuestionSectionController::class);

Route::ApiResource('employee-exams', EmployeeExamController::class);
Route::get('employee-exams/count/{employee_code}/{exam_id}', [EmployeeExamController::class, 'currentExamCount'])->name('employee-exams.currentExamCount');

