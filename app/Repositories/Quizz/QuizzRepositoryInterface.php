<?php

namespace App\Repositories\Quizz;

use App\Models\Quizz;

interface QuizzRepositoryInterface
{
    public function createQuizz(string $title, ?string $description, ?int $imageId): Quizz;
}
