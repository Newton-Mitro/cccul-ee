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
        return QuestionBank::with('questionOptions')->get();
    }

    public function store(StoreQuestionBankRequest $request)
    {


        $questionBank = new QuestionBank();
        $questionBank->id = $request->id;
        $questionBank->question_text = $request->question_text;
        $questionBank->question_section_id = $request->question_section_id;
        $questionBank->active = $request->active;
        $questionBank->save();

        $questionOption = QuestionOption::insert($request->question_options);

        return QuestionBank::find($request->id)->with('questionOptions')->get();
    }

    public function getQuestionsBySection($question_section_id, $limit)
    {
        return QuestionBank::where('question_section_id',$question_section_id)->with('questionOptions')->inRandomOrder()->limit($limit)->get();
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
