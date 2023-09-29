<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $quizz_id
 * @property ?int $image_id
 * @property string $text
 */
class Question extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function quizz(): BelongsTo
    {
        return $this->belongsTo(Quizz::class);
    }

    public function answers(): HasMany
    {
        return $this->hasMany(Answer::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
