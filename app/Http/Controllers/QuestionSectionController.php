<?php

namespace App\Http\Controllers;

use App\Models\QuestionSection;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionSectionRequest;
use App\Http\Requests\UpdateQuestionSectionRequest;

class QuestionSectionController extends Controller
{
    public function index()
    {
        return QuestionSection::all();
    }

    public function store(StoreQuestionSectionRequest $request)
    {
        $questionSection = new QuestionSection();
        $questionSection->section_title = $request->section_title;
        $questionSection->question_for_section = $request->question_for_section;
        $questionSection->time_for_section = $request->time_for_section;
        $questionSection->order = $request->order;
        $questionSection->save();
        return $questionSection;
    }

    public function show(QuestionSection $questionSection)
    {
        //
    }

    public function update(UpdateQuestionSectionRequest $request, QuestionSection $questionSection)
    {
        //
    }

    public function destroy(QuestionSection $questionSection)
    {
        //
    }
}
