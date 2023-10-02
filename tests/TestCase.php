<?php

namespace Tests;

use App\Models\Answer;
use App\Models\Quizz;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, RefreshDatabase;

    protected function createMockAnswer(): Answer {
        $answer = new Answer();
        $answer->id = 1;
        $answer->question_id = 1;
        $answer->image_id = 1;
        $answer->text = 'Mock answer text';
        $answer->image = null;
        return $answer;
    }

    protected function createMockQuizz(int $id): Quizz
    {
        $quizz = new Quizz();
        $quizz->id = $id;
        $quizz->title = 'Are You More of a Barbie or Ken?';
        $quizz->slug = 'are-you-more-of-a-barbie-or-ken';
        $quizz->description = 'Are you popular, independent, friendly, and generous like Barbie or are you "just Ken", attention-seeking, forthright, brash, and a bit dim-witted? This quiz will reveal the answer!';
        $quizz->image_id = 1;
        $quizz->type = 'OUTCOME';
        $quizz->image = null;
        $quizz->created_at = '2023-09-29T18:27:56.000000Z';
        $quizz->updated_at = '2023-09-29T18:27:56.000000Z';

        return $quizz;
    }
}
