<?php

namespace App\Services\Transformers\Answer\PickCorrect;

use App\Models\Image;

class PickCorrectAnswer
{
    public function __construct(
        public int $id,
        public int $question_id,
        public string $text,
        public ?Image $image,
    ) {}
}
