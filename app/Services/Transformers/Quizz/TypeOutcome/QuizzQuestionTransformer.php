<?php

namespace App\Services\Transformers\Quizz\TypeOutcome;

class QuizzQuestionTransformer
{
    public function transform(array $questions): array
    {
        return array_map(function ($question) {
            unset($question['correct_answers']);
            return $question;
        }, $questions);
    }
}
