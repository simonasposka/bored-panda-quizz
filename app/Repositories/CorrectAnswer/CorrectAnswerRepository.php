<?php

namespace App\Repositories\CorrectAnswer;

use App\Models\CorrectAnswer;

class CorrectAnswerRepository implements CorrectAnswerRepositoryInterface
{
    public function createCorrectAnswer(int $questionId, int $answerId): CorrectAnswer
    {
        $correctAnswer              = new CorrectAnswer();
        $correctAnswer->question_id = $questionId;
        $correctAnswer->answer_id   = $answerId;
        $correctAnswer->save();

        return $correctAnswer;
    }
}
