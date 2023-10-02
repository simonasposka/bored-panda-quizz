<?php

namespace App\Services\Factories;

use App\Enums\QuizzType;
use App\Services\Transformers\Answer\PickCorrect\PickCorrectAnswerTransformer;
use App\Services\Transformers\Question\Outcome\OutcomeQuestionTransformer;
use App\Services\Transformers\Question\PickCorrect\PickCorrectQuestionTransformer;
use App\Services\Transformers\Quizz\Outcome\OutcomeQuizzTransformer;
use App\Services\Transformers\Quizz\PickCorrect\PickCorrectQuizzTransformer;
use App\Services\Transformers\Quizz\QuizzTransformerInterface;

class QuizzTransformerFactory
{
    public function create(string $quizzType): QuizzTransformerInterface
    {
        if ($quizzType === QuizzType::OUTCOME->value) {
            return new OutcomeQuizzTransformer(
                new OutcomeQuestionTransformer()
            );
        }

        return new PickCorrectQuizzTransformer(
            new PickCorrectQuestionTransformer(
                new PickCorrectAnswerTransformer()
            )
        );
    }
}
