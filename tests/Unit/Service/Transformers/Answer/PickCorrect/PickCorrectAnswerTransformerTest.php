<?php

namespace Tests\Unit\Service\Transformers\Answer\PickCorrect;

use App\Services\Transformers\Answer\PickCorrect\PickCorrectAnswerTransformer;
use Tests\TestCase;

class PickCorrectAnswerTransformerTest extends TestCase
{
    public function test_transform()
    {
        $answer = $this->createMockAnswer();

        $transformer = new PickCorrectAnswerTransformer();
        $transformedAnswer = $transformer->transform($answer);

        $this->assertEquals($answer->id, $transformedAnswer->id);
        $this->assertEquals($answer->question_id, $transformedAnswer->question_id);
        $this->assertEquals($answer->text, $transformedAnswer->text);
    }
}
