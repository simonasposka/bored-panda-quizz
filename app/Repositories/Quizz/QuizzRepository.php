<?php

namespace App\Repositories\Quizz;

use App\Enums\QuizzType;
use App\Models\Quizz;
use App\Constants\Relationships;

class QuizzRepository implements QuizzRepositoryInterface
{
    public function createQuizz(string $title, QuizzType $quizzType, ?string $description = null, ?int $imageId = null): Quizz
    {
        $quizz              = new Quizz();
        $quizz->title       = $title;
        $quizz->description = $description;
        $quizz->image_id    = $imageId;
        $quizz->type        = $quizzType->value;
        $quizz->save();

        return $quizz;
    }

    public function tryFindBySlugWithImageAndQuestions(string $slug): ?Quizz
    {
        $quizz = Quizz::with([
            Relationships::IMAGE,
            Relationships::QUESTIONS => function ($query) {
                return $query->with([
                    Relationships::IMAGE,
                    Relationships::CORRECT_ANSWERS,
                    Relationships::ANSWERS => function ($query) {
                        return $query->with([
                            Relationships::IMAGE,
                            Relationships::ANSWER_OUTCOMES,
                        ]);
                    },
                ]);
            },
        ])->where(Quizz::SLUG_FIELD, '=', $slug)->first();

        if ($quizz instanceof Quizz) {
            return $quizz;
        }

        return null;
    }
}
