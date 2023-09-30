<?php

namespace App\Services;

use App\Constants\Relationships;
use App\Models\Quizz;

class QuizzRelationshipLoader
{
    public function loadOutcomesWithImages(Quizz $quizz): void
    {
        $quizz->load([
            Relationships::OUTCOMES => function ($query) {
                return $query->with(Relationships::IMAGE);
            },
        ]);
    }
}
