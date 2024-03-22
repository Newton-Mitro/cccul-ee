<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\EmployeeExam;

class AnswerSheet extends Model
{
    use HasFactory;

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function employeeExam(): BelongsTo
    {
        return $this->belongsTo(EmployeeExam::class);
    }
}
