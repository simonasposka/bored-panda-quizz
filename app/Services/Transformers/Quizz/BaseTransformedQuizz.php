<?php

namespace App\Services\Transformers\Quizz;

use App\Models\Image;
use App\Services\Transformers\Question\BaseTransformedQuestion;

abstract class BaseTransformedQuizz
{
    public function __construct(
        public int $id,
        public string $title,
        public string $slug,
        public string $description,
        public string $type,
        public string $createdAt,
        public string $updatedAt,
        public ?Image $image,
        /** @var $questions BaseTransformedQuestion[] */
        public array $questions,
    ) {}

    public function toArray(): array {
        return get_object_vars($this);
    }
}
