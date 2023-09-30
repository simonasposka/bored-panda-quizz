<?php

namespace App\Repositories\CorrectAnswer;

use App\Models\CorrectAnswer;

interface CorrectAnswerRepositoryInterface
{
    public function createCorrectAnswer(int $questionId, int $answerId): CorrectAnswer;
}
