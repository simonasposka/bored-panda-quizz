<?php

namespace App\Services;

use App\Models\Quizz;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use App\Services\Transformers\Quizz\QuizzTransformer;

class QuizzService
{
    public function __construct(
        readonly QuizzRepositoryInterface $quizzRepository,
        readonly QuizzRelationshipLoader  $quizzRelationshipLoader,
        readonly QuizzTransformer         $quizzTransformer,
    ) {}

    public function tryFindBySlug(string $slug): ?Quizz
    {
        $quizz = $this->quizzRepository->tryFindBySlugWithImageAndQuestions($slug);

        if (!$quizz instanceof Quizz) {
            return null;
        }

        if ($quizz->isQuizzTypeOutcome()) {
            $this->quizzRelationshipLoader->loadOutcomesWithImages($quizz);
        }

        return $quizz;
    }
}
