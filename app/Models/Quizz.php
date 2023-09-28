<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property string $title
 * @property string $slug
 * @property ?string $description
 * @property ?int image_id
 * @property string created_at
 * @property string updated_at
 */
class Quizz extends Model
{
    use HasFactory, HasSlug;

    protected $table = 'quizzes';

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }
}
