<?php

namespace App\Services\Transformers\Quizz\PickCorrect;

use App\Models\Question;
use App\Models\Quizz;
use App\Services\Transformers\Question\PickCorrect\PickCorrectQuestionTransformer;
use App\Services\Transformers\Quizz\BaseTransformedQuizz;
use App\Services\Transformers\Quizz\QuizzTransformerInterface;

class PickCorrectQuizzTransformer implements QuizzTransformerInterface
{
    public function __construct(readonly PickCorrectQuestionTransformer $quizzQuestionTransformer)
    {
    }

    public function transform(Quizz $quizz): BaseTransformedQuizz
    {
        $transformedQuestions = [];

        foreach ($quizz->questions as $question) {
            /** @var Question $question */
            $transformedQuestions[] = $this->quizzQuestionTransformer->transform($question);
        }

        return new PickCorrectQuizz(
            id: $quizz->id,
            title: $quizz->title,
            slug: $quizz->slug,
            description: $quizz->description,
            type: $quizz->type,
            createdAt: $quizz->created_at,
            updatedAt: $quizz->updated_at,
            image: $quizz->image,
            questions: $transformedQuestions,
        );

    }
}
