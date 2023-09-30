<?php

namespace App\Services\Transformers\Quizz\TypeOutcome;

use App\Models\Quizz;

class QuizzTypeOutcomeTransformer
{
    public function __construct(readonly QuizzQuestionTransformer $quizzQuestionTransformer)
    {
    }

    public function transform(Quizz $quizz): array
    {
        $quizzArray              = $quizz->toArray();
        $quizzArray['questions'] = $this->quizzQuestionTransformer->transform($quizzArray['questions']);

        return $quizzArray;
    }
}
