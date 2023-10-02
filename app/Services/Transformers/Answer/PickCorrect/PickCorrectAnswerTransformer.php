<?php

namespace App\Services\Transformers\Answer\PickCorrect;

use App\Models\Answer;

class PickCorrectAnswerTransformer
{
    public function transform(Answer $answer): PickCorrectAnswer
    {
        return new PickCorrectAnswer(
            id: $answer->id,
            question_id: $answer->question_id,
            text: $answer->text,
            image: $answer->image,
        );
    }
}
