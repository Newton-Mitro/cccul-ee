<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionOption;
use App\Models\QuestionSection;

class QuestionBank extends Model
{
    use HasFactory;

    public function questionOptions(): HasMany
    {
        return $this->hasMany(QuestionOption::class, 'question_bank_id');
    }

    public function questionSection(): BelongsTo
    {
        return $this->belongsTo(QuestionSection::class);
    }
}
