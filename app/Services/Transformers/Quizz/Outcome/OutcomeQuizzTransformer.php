<?php

namespace App\Services\Transformers\Quizz\Outcome;

use App\Models\Question;
use App\Models\Quizz;
use App\Services\Transformers\Question\Outcome\OutcomeQuestionTransformer;
use App\Services\Transformers\Quizz\BaseTransformedQuizz;
use App\Services\Transformers\Quizz\QuizzTransformerInterface;

class OutcomeQuizzTransformer implements QuizzTransformerInterface
{
    public function __construct(readonly OutcomeQuestionTransformer $quizzQuestionTransformer)
    {
    }

    public function transform(Quizz $quizz): BaseTransformedQuizz
    {
        $transformedQuestions = [];

        foreach ($quizz->questions as $question) {
            /** @var Question $question */
            $transformedQuestions[] = $this->quizzQuestionTransformer->transform($question);
        }

        return new OutcomeQuizz(
            id: $quizz->id,
            title: $quizz->title,
            slug: $quizz->slug,
            description: $quizz->description,
            type: $quizz->type,
            createdAt: $quizz->created_at,
            updatedAt: $quizz->updated_at,
            image: $quizz->image,
            questions: $transformedQuestions,
            outcomes: $quizz->outcomes->toArray(),
        );
    }
}
