<?php

namespace App\Http\Controllers;

use App\Models\QuestionBank;
use App\Models\QuestionOption;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionBankRequest;
use App\Http\Requests\UpdateQuestionBankRequest;

class QuestionBankController extends Controller
{
    public function index()
    {
        // return QuestionBank::with('questionOptions')->get();
        return QuestionBank::all();
    }

    public function store(StoreQuestionBankRequest $request)
    {

        $questionOption = QuestionOption::insert($request->question_options);
        $questionBank = new QuestionBank();
        $questionBank->question_text = $request->question_text;
        $questionBank->question_section_id = $request->question_section_id;
        $questionBank->correct_option_id = $request->correct_option_id;
        $questionBank->correct_option_text = $request->correct_option_text;
        $questionBank->active = $request->active;
        $questionBank->save();
        return $questionBank;
    }

    public function show(QuestionBank $questionBank)
    {
        //
    }

    public function update(UpdateQuestionBankRequest $request, QuestionBank $questionBank)
    {
        //
    }

    public function destroy(QuestionBank $questionBank)
    {
        //
    }
}
