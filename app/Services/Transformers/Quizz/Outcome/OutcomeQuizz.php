<?php

namespace App\Services\Transformers\Quizz\Outcome;

use App\Models\Image;
use App\Services\Transformers\Quizz\BaseTransformedQuizz;

class OutcomeQuizz extends BaseTransformedQuizz
{
    public function __construct(
        int          $id,
        string       $title,
        string       $slug,
        string       $description,
        string       $type,
        string       $createdAt,
        string       $updatedAt,
        ?Image       $image,
        array        $questions,
        public array $outcomes,
    )
    {
        parent::__construct(
            $id,
            $title,
            $slug,
            $description,
            $type,
            $createdAt,
            $updatedAt,
            $image,
            $questions,
        );
    }
}
