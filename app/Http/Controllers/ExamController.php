<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreExamRequest;
use App\Http\Requests\UpdateExamRequest;

class ExamController extends Controller
{
    public function index()
    {
        return Exam::all();
    }

    public function activeExam()
    {
        $exam =  Exam::where('active', true)->first();
        return  $exam;
    }

    public function store(StoreExamRequest $request)
    {
        $exam = new Exam();
        $exam->exam_title = $request->exam_title;
        $exam->max_exam_can_take = $request->max_exam_can_take;
        $exam->active = $request->active;
        $exam->save();
        return $exam;
    }

    public function show(Exam $exam)
    {
        return $exam;
    }

    public function update(UpdateExamRequest $request, Exam $exam)
    {
        //
    }

    public function destroy(Exam $exam)
    {
        //
    }
}
