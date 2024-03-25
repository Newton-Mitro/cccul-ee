<?php

namespace App\Http\Controllers;

use App\Models\AnswerSheet;
use App\Models\EmployeeExam;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAnswerSheetRequest;
use App\Http\Requests\UpdateAnswerSheetRequest;

class AnswerSheetController extends Controller
{
    public function index()
    {
        //
    }

    public function store(StoreAnswerSheetRequest $request)
    {
        $employeeExam = new EmployeeExam();
        $employeeExam->id = $request->id;
        $employeeExam->emp_code_exam_id_exam_num = $request->emp_code_exam_id_exam_num;
        $employeeExam->employee_code = $request->employee_code;
        $employeeExam->exam_id = $request->exam_id;
        $employeeExam->exam_num = $request->exam_num;
        $employeeExam->name = $request->name;
        $employeeExam->total_questions = $request->total_questions;
        $employeeExam->correct_answers = $request->correct_answers;
        $employeeExam->wrong_answers = $request->wrong_answers;
        $employeeExam->save();
        $answerSheet = AnswerSheet::insert($request->submitted_answers);

        return EmployeeExam::find($request->id)->with('answerSheets')->get()->firstOrFail();
    }
}
