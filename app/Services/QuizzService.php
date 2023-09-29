<?php

namespace App\Services;

use App\Constants\Relationships;
use App\Enums\QuizzType;
use App\Models\Quizz;
use App\Repositories\Quizz\QuizzRepositoryInterface;

class QuizzService
{
    public function __construct(readonly QuizzRepositoryInterface $quizzRepository)
    {
    }

    public function tryFindBySlug(string $slug): ?Quizz
    {
        $quizz = $this->quizzRepository->tryFindBySlugWithImageAndQuestions($slug);

        if (!$quizz instanceof Quizz) {
            return null;
        }

        $this->loadRequiredRelationships($quizz);

        return $quizz;
    }

    private function loadRequiredRelationships(Quizz $quizz): void
    {
        if ($quizz->type === QuizzType::OUTCOME->value) {
            $quizz->load([
                Relationships::OUTCOMES => function ($query) {
                    return $query->with(Relationships::IMAGE);
                },
            ]);
        }
    }
}
