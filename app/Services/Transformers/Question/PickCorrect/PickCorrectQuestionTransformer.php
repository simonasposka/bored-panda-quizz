<?php

namespace App\Services\Transformers\Question\PickCorrect;

use App\Models\Answer;
use App\Models\Question;
use App\Services\Transformers\Answer\PickCorrect\PickCorrectAnswerTransformer;
use App\Services\Transformers\Question\BaseTransformedQuestion;

class PickCorrectQuestionTransformer
{
    public function __construct(readonly PickCorrectAnswerTransformer $pickCorrectAnswerTransformer)
    {
    }

    public function transform(Question $question): BaseTransformedQuestion
    {
        $transformedAnswers = [];

        foreach ($question->answers as $answer) {
            /** @var Answer $answer */
            $transformedAnswers[] = $this->pickCorrectAnswerTransformer->transform($answer);
        }

        return new PickCorrectQuestion(
            id: $question->id,
            quizzId: $question->quizz_id,
            text: $question->text,
            image: $question->image,
            answers: $transformedAnswers,
            correctAnswers: $question->correctAnswers,
        );
    }
}
