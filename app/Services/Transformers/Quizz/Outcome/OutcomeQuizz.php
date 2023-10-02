<?php

namespace App\Services\Transformers\Quizz\Outcome;

use App\Models\Image;
use App\Services\Transformers\Quizz\BaseTransformedQuizz;
use Illuminate\Support\Collection;

class OutcomeQuizz extends BaseTransformedQuizz
{
    public function __construct(
        int               $id,
        string            $title,
        string            $slug,
        string            $description,
        string            $type,
        string            $createdAt,
        string            $updatedAt,
        ?Image            $image,
        array             $questions,
        public Collection $outcomes,
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
