<?php

namespace App\Repositories\Question;

interface QuestionRepositoryInterface
{
    public function createQuestion(int $quizzId, string $text, ?int $imageId = null);
}
