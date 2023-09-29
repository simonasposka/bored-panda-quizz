<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $question_id
 * @property ?int $image_id
 * @property string $text
 */
class Answer extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function question(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
