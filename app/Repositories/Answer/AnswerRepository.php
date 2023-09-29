<?php

namespace App\Repositories\Answer;

use App\Models\Answer;

class AnswerRepository implements AnswerRepositoryInterface
{
    public function createAnswer(int $questionId, ?string $text = null, ?int $imageId = null): Answer
    {
        $answer              = new Answer();
        $answer->question_id = $questionId;
        $answer->image_id    = $imageId;
        $answer->text        = $text;
        $answer->save();

        return $answer;
    }
}
