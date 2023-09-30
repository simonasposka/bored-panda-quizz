<?php

namespace App\Repositories\Quizz;

use App\Enums\QuizzType;
use App\Models\Quizz;

interface QuizzRepositoryInterface
{
    public function getAllWithImages(): array;

    public function tryFindBySlugWithImageAndQuestions(string $slug): ?Quizz;

    public function createQuizz(string $title, QuizzType $quizzType, ?string $description = null, ?int $imageId = null): Quizz;
}
