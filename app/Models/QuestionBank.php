<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionOption;
use App\Models\QuestionSection;
use Illuminate\Database\Eloquent\Relations\HasMany;

class QuestionBank extends Model
{
    use HasFactory;

    public function questionOptions(): HasMany
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function questionSection(): BelongsTo
    {
        return $this->belongsTo(QuestionSection::class);
    }
}
