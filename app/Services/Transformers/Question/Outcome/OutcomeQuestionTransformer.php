<?php

namespace App\Services\Transformers\Question\Outcome;

use App\Models\Question;
use App\Services\Transformers\Question\BaseTransformedQuestion;

class OutcomeQuestionTransformer
{
    public function transform(Question $question): BaseTransformedQuestion
    {
        return new OutcomeQuestion(
            id: $question->id,
            quizzId: $question->quizz_id,
            text: $question->text,
            image: $question->image,
            answers: $question->answers->toArray(),
        );
    }
}
