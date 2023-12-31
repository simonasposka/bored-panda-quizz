<?php

namespace App\Services;

use App\Constants\CacheKeys;
use App\Models\Quizz;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use App\Services\Cache\CacheServiceInterface;
use App\Services\Transformers\Quizz\QuizzTransformer;

class QuizzService
{
    public function __construct(
        readonly QuizzRepositoryInterface $quizzRepository,
        readonly QuizzRelationshipLoader  $quizzRelationshipLoader,
        readonly CacheServiceInterface    $cacheService,
        readonly QuizzTransformer         $quizzTransformer,
    ) {}

    public function getAllWithImages(): array
    {
        $cachedQuizzes = $this->cacheService->tryGetByKey(CacheKeys::ALL_QUIZZES_WITH_IMAGES);

        if ($cachedQuizzes != null) {
            return $cachedQuizzes;
        }

        $quizzes = $this->quizzRepository->getAllWithImages();

        $this->cacheService->remember(CacheKeys::ALL_QUIZZES_WITH_IMAGES, $quizzes);

        return $quizzes;
    }

    public function tryFindBySlug(string $slug): ?array
    {
        $cachedQuizz = $this->cacheService->tryGetByKey($slug);

        if ($cachedQuizz != null) {
            return $cachedQuizz;
        }

        $quizz = $this->quizzRepository->tryFindBySlugWithImageAndQuestions($slug);

        if (!$quizz instanceof Quizz) {
            return null;
        }

        if ($quizz->isQuizzTypeOutcome()) {
            $this->quizzRelationshipLoader->loadOutcomesWithImages($quizz);
        }

        $transformedQuizz = $this->quizzTransformer->transform($quizz)->toArray();

        $this->cacheService->remember($slug, $transformedQuizz);

        return $transformedQuizz;
    }
}
