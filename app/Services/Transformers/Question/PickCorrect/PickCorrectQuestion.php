<?php

namespace App\Services\Transformers\Question\PickCorrect;

use App\Models\Image;
use App\Services\Transformers\Question\BaseTransformedQuestion;
use Illuminate\Support\Collection;

class PickCorrectQuestion extends BaseTransformedQuestion
{
    public function __construct(
        int               $id,
        int               $quizzId,
        string            $text,
        ?Image            $image,
        array             $answers,
        public Collection $correctAnswers
    )
    {
        parent::__construct($id, $quizzId, $text, $image, $answers);
    }
}
