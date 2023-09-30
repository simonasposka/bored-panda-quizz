<?php

namespace App\Services\Transformers\Quizz;

use App\Models\Quizz;
use App\Services\Transformers\Quizz\TypeOutcome\QuizzTypeOutcomeTransformer;
use App\Services\Transformers\Quizz\TypePickCorrect\QuizzTypePickCorrectTransformer;

class QuizzTransformer
{
    public function __construct(
        readonly QuizzTypePickCorrectTransformer $quizzTypePickCorrectTransformer,
        readonly QuizzTypeOutcomeTransformer     $quizzTypeOutcomeTransformer,
    ) {}

    public function transform(Quizz $quizz): array
    {
        if ($quizz->isQuizzTypeOutcome()) {
            return $this->quizzTypeOutcomeTransformer->transform($quizz);
        }

        return $this->quizzTypePickCorrectTransformer->transform($quizz);
    }
}
