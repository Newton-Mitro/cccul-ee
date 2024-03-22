<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Exam;
use App\Models\AnswerSheet;

class EmployeeExam extends Model
{
    use HasFactory;

    public function exam(): BelongsTo
    {
        return $this->belongsTo(Exam::class);
    }

    public function answerSheets(): HasMany
    {
        return $this->hasMany(AnswerSheet::class);
    }
}
