<?php

namespace App\Services\Transformers\Question;

use App\Models\Image;

abstract class BaseTransformedQuestion
{
    public function __construct(
        public int $id,
        public int $quizzId,
        public string $text,
        public ?Image $image,
        public array $answers,
    ) {}
}
