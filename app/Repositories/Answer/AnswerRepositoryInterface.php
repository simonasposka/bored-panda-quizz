<?php

namespace App\Repositories\Answer;

use App\Models\Answer;

interface AnswerRepositoryInterface
{
    public function createAnswer(int $questionId, ?string $text = null, ?int $imageId = null): Answer;
}
