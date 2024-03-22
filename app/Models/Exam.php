<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AnswerSheet;
use App\Models\EmployeeExam;

class Exam extends Model
{
    use HasFactory;

    public function employeeExams(): HasMany
    {
        return $this->hasMany(EmployeeExam::class);
    }

    public function answerSheets(): HasMany
    {
        return $this->hasMany(AnswerSheet::class);
    }
}
