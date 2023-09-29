<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $quizz_id
 * @property ?int $image_id
 * @property string $title
 * @property ?string $description
 */
class Outcome extends Model
{
    use HasFactory;

    public const QUIZZ_ID_FIELD = 'quizz_id';
    public const IMAGE_ID_FIELD = 'image_id';
    public const TITLE_FIELD = 'title';
    public const DESCRIPTION_FIELD = 'description';

    public $timestamps = false;

    public function quizz(): BelongsTo
    {
        return $this->belongsTo(Quizz::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}
