<?php

namespace Tests\Unit\Service\Factories;

use App\Enums\QuizzType;
use App\Services\Factories\QuizzTransformerFactory;
use App\Services\Transformers\Quizz\Outcome\OutcomeQuizzTransformer;
use App\Services\Transformers\Quizz\PickCorrect\PickCorrectQuizzTransformer;
use Tests\TestCase;

class QuizzTransformerFactoryTest extends TestCase
{
    public function test_createWhenQuizzHasTypeOutcome()
    {
        $factory = new QuizzTransformerFactory();
        $quizzTransformer = $factory->create(QuizzType::OUTCOME->value);
        $this->assertInstanceOf(OutcomeQuizzTransformer::class, $quizzTransformer);
    }

    public function test_createWhenQuizzHasOtherType()
    {
        $factory = new QuizzTransformerFactory();
        $quizzTransformer = $factory->create(QuizzType::PICK_CORRECT->value);
        $this->assertInstanceOf(PickCorrectQuizzTransformer::class, $quizzTransformer);
    }
}
