<?php

namespace App\Repositories\Outcome;

use App\Models\Outcome;

class OutcomeRepository implements OutcomeRepositoryInterface
{
    public function createOutcome(int $quizzId, string $title, ?string $description, ?int $imageId): Outcome
    {
        $outcome = new Outcome();
        $outcome->quizz_id = $quizzId;
        $outcome->image_id = $imageId;
        $outcome->title = $title;
        $outcome->description = $description;
        $outcome->save();

        return $outcome;
    }
}
