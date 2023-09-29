<?php

namespace App\Repositories\AnswerOutcome;

use App\Models\AnswerOutcome;

class AnswerOutcomeRepository implements AnswerOutcomeRepositoryInterface
{
    public function createOutcomeAnswer(int $answerId, int $outcomeId): AnswerOutcome
    {
        $answerOutcome             = new AnswerOutcome();
        $answerOutcome->answer_id  = $answerId;
        $answerOutcome->outcome_id = $outcomeId;
        $answerOutcome->save();

        return $answerOutcome;
    }
}
