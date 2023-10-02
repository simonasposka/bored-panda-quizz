<?php

namespace App\Models;

use App\Enums\QuizzType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Collection;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property int $id
 * @property ?int image_id
 * @property string $title
 * @property string $slug
 * @property string created_at
 * @property string updated_at
 * @property string $type
 * @property ?string $description
 * @property ?Image $image
 * @property Collection $questions
 * @property Collection $outcomes
 * @method static Builder where($column, $operator = null, $value = null, $boolean = 'and')
 */
class Quizz extends Model
{
    use HasFactory, HasSlug;

    public const TITLE_FIELD = 'title';
    public const SLUG_FIELD = 'slug';
    public const IMAGE_ID_FIELD = 'image_id';
    public const DESCRIPTION_FIELD = 'description';
    public const TYPE_FIELD = 'type';

    protected $table = 'quizzes';

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    public function outcomes(): HasMany
    {
        return $this->hasMany(Outcome::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom(self::TITLE_FIELD)
            ->saveSlugsTo(self::SLUG_FIELD);
    }

    public function isQuizzTypeOutcome(): bool
    {
        return $this->type === QuizzType::OUTCOME->value;
    }
}
