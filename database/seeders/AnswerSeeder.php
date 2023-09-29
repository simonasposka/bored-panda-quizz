<?php

namespace Database\Seeders;

use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\AnswerOutcome\AnswerOutcomeRepositoryInterface;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function __construct(
        readonly AnswerRepositoryInterface        $answerRepository,
        readonly AnswerOutcomeRepositoryInterface $answerOutcomeRepository,
    )
    {
    }

    public function run(): void
    {
        $this->createOutcomeAnswers();
    }

    private function createOutcomeAnswers(): void
    {
        $this->createOutcomeAnswerForFirstQuestion();
        $this->createOutcomeAnswerForSecondQuestion();
        $this->createOutcomeAnswerForThirdQuestion();
        $this->createOutcomeAnswerForFourthQuestion();
        $this->createOutcomeAnswerForFifthQuestion();
        $this->createOutcomeAnswerForSixthQuestion();
        $this->createOutcomeAnswerForSeventhQuestion();
        $this->createOutcomeAnswerForEightQuestion();
        $this->createOutcomeAnswerForNinthQuestion();
        $this->createOutcomeAnswerForTenthQuestion();
    }

    private function createOutcomeAnswerForFirstQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 1, text: 'Barbie Car', imageId: 16);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 1, text: 'Rollerblades', imageId: 17);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);
    }

    private function createOutcomeAnswerForSecondQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 2, text: 'Toast with Butter', imageId: 18);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 2, text: 'Doughnut and Coffee', imageId: 19);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);
    }

    private function createOutcomeAnswerForThirdQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 3, text: 'Western Ken', imageId: 20);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 3, text: 'Surfboard Ken', imageId: 21);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 3, text: 'Fashionista Ken', imageId: 22);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);
    }

    private function createOutcomeAnswerForFourthQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 4, text: 'Original Barbie', imageId: 23);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 4, text: 'Totally Hair Barbie', imageId: 24);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 4, text: 'Mermaid Barbie', imageId: 25);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);
    }

    private function createOutcomeAnswerForFifthQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 5, text: 'President Barbie', imageId: 26);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 5, text: 'Weird Barbie', imageId: 27);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 5, text: 'Mermaid Barbie', imageId: 28);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);
    }

    private function createOutcomeAnswerForSixthQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 6, imageId: 29);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 6, imageId: 30);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 6, imageId: 31);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);
    }

    private function createOutcomeAnswerForSeventhQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 7, text: '"Push" by Matchbox 20');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 7, text: '"Barbie Girl" by Aqua');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 7, text: '"Closer to Fine" by The Indigo Girls');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);
    }

    private function createOutcomeAnswerForEightQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 8, imageId: 32);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 8, imageId: 33);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);
    }

    private function createOutcomeAnswerForNinthQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 9, text: 'Night out with the girls');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 9, text: 'Movie marathon');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 9, text: 'Cruise in your convertible');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);

        $answer4 = $this->answerRepository->createAnswer(questionId: 9, text: 'Practice your guitar');
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer4->id, outcomeId: OutcomeSeeder::OUTCOME_KEN_ID);
    }

    private function createOutcomeAnswerForTenthQuestion(): void
    {
        $answer1 = $this->answerRepository->createAnswer(questionId: 10, text: 'Barbie Athletic Outfit', imageId: 34);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer1->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer2 = $this->answerRepository->createAnswer(questionId: 10, text: 'Barbie Movie Outfit', imageId: 35);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer2->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);

        $answer3 = $this->answerRepository->createAnswer(questionId: 10, text: 'Roller Blade Outfit', imageId: 36);
        $this->answerOutcomeRepository->createOutcomeAnswer(answerId: $answer3->id, outcomeId: OutcomeSeeder::OUTCOME_BARBIE_ID);
    }
}
