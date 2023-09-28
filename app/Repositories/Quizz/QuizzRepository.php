<?php

namespace App\Repositories\Quizz;

use App\Models\Quizz;

class QuizzRepository implements QuizzRepositoryInterface
{
    public function createQuizz(string $title, ?string $description, ?int $imageId): Quizz
    {
        $quizz = new Quizz();
        $quizz->title = $title;
        $quizz->description = $description;
        $quizz->image_id = $imageId;
        $quizz->save();

        return $quizz;
    }
}
