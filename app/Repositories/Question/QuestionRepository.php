<?php

namespace App\Repositories\Question;

use App\Models\Question;

class QuestionRepository implements QuestionRepositoryInterface
{
    public function createQuestion(int $quizzId, string $text, ?int $imageId = null): Question
    {
        $question           = new Question();
        $question->quizz_id = $quizzId;
        $question->image_id = $imageId;
        $question->text     = $text;
        $question->save();

        return $question;
    }
}
