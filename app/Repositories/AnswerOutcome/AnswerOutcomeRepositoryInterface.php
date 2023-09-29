<?php

namespace App\Repositories\AnswerOutcome;

use App\Models\AnswerOutcome;

interface AnswerOutcomeRepositoryInterface
{
    public function createOutcomeAnswer(int $answerId, int $outcomeId): AnswerOutcome;
}
