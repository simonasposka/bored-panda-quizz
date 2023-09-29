<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $answer_id
 * @property int $outcome_id
 */
class AnswerOutcome extends Model
{
    use HasFactory;

    public const ANSWER_ID_FIELD = 'answer_id';
    public const OUTCOME_ID_FIELD = 'outcome_id';

    public $timestamps = false;

    public function answer(): BelongsTo
    {
        return $this->belongsTo(Answer::class);
    }

    public function outcome(): BelongsTo
    {
        return $this->belongsTo(Outcome::class);
    }
}
