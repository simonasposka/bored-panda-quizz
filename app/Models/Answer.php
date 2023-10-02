<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property int $question_id
 * @property ?int $image_id
 * @property ?string $text
 * @property ?Image $image
 */
class Answer extends Model
{
    use HasFactory;

    public const QUESTION_ID_FIELD = 'question_id';
    public const IMAGE_ID_FIELD = 'image_id';
    public const TEXT_FIELD = 'text';

    public $timestamps = false;

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function answerOutcomes(): HasMany
    {
        return $this->hasMany(AnswerOutcome::class);
    }
}
