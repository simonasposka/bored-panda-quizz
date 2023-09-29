<?php

namespace App\Repositories\Quizz;

use App\Enums\QuizzType;
use App\Models\Quizz;

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
            'image',
            'questions' => function ($query) {
                return $query->with([
                    'image',
                    'answers' => function ($query) {
                        return $query->with('image');
                    },
                ]);
            },
        ])->where('slug', '=', $slug)->first();

        if ($quizz instanceof Quizz) {
            return $quizz;
        }

        return null;
    }
}
