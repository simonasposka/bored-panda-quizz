<?php

namespace App\Repositories\Outcome;

use App\Models\Outcome;

interface OutcomeRepositoryInterface
{
    public function createOutcome(int $quizzId, string $title, ?string $description, ?int $imageId): Outcome;
}
