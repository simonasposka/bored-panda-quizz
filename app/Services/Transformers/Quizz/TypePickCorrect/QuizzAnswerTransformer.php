<?php

namespace App\Services\Transformers\Quizz\TypePickCorrect;

class QuizzAnswerTransformer
{
    public function transform(array $answers): array
    {
        return array_map(function ($answer) {
            unset($answer['answer_outcomes']);
            return $answer;
        }, $answers);
    }
}
