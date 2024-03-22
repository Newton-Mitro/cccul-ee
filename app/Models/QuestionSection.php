<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\QuestionBank;

class QuestionSection extends Model
{
    use HasFactory;

    public function questionBanks(): HasMany
    {
        return $this->hasMany(QuestionBanks::class);
    }
}
