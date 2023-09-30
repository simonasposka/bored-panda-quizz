<?php

namespace App\Services\Transformers\Quizz\TypePickCorrect;

class QuizzQuestionTransformer
{
    public function __construct(readonly QuizzAnswerTransformer $quizzAnswerTransformer)
    {
    }

    public function transform(array $questions): array
    {
        return array_map(function($question) {
            $question['answers'] = $this->quizzAnswerTransformer->transform($question['answers']);
            return $question;
        }, $questions);
    }
}
