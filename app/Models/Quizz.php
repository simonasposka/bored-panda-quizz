<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Query\Builder;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property string $title
 * @property string $slug
 * @property ?string $description
 * @property ?int image_id
 * @property string created_at
 * @property string updated_at
 * @property string $type
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
}
