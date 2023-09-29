<?php

namespace App\Repositories\Answer;

interface AnswerRepositoryInterface
{
    public function createAnswer(int $questionId, string $text, ?int $imageId = null);
}
