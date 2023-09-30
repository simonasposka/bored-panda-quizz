<?php

namespace Database\Seeders;

use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\CorrectAnswer\CorrectAnswerRepositoryInterface;
use Illuminate\Database\Seeder;

class QuizzPickCorrectAnswerSeeder extends Seeder
{
    public function __construct(
        readonly AnswerRepositoryInterface        $answerRepository,
        readonly CorrectAnswerRepositoryInterface $correctAnswerRepository,
    )
    {
    }

    public function run(): void
    {
        $this->createAnswersForFirstQuestion();
        $this->createAnswersForSecondQuestion();
        $this->createAnswersForThirdQuestion();
        $this->createAnswersForFourthQuestion();
        $this->createAnswersForFifthQuestion();
        $this->createAnswersForSixthQuestion();
        $this->createAnswersForSeventhQuestion();
        $this->createAnswersForEightQuestion();
        $this->createAnswersForNinthQuestion();
        $this->createAnswersForTenthQuestion();
    }

    private function createAnswersForFirstQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 11, text: 'Marius');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 11, text: 'Olympus Mons');
        $this->answerRepository->createAnswer(questionId: 11, text: 'Maat Mons');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 11, answerId: $correctAnswer->id);
    }

    private function createAnswersForSecondQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 12, text: 'Mountains');
        $this->answerRepository->createAnswer(questionId: 12, text: 'Storms');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 12, text: 'War');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 12, answerId: $correctAnswer->id);
    }

    private function createAnswersForThirdQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 13, text: '1');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 13, text: '2');
        $this->answerRepository->createAnswer(questionId: 13, text: '3');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 13, answerId: $correctAnswer->id);
    }

    private function createAnswersForFourthQuestion(): void
    {
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 14, text: 'Carbon dioxide');
        $this->answerRepository->createAnswer(questionId: 14, text: 'Nitrogen');
        $this->answerRepository->createAnswer(questionId: 14, text: 'Argon');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 14, answerId: $correctAnswer->id);
    }

    private function createAnswersForFifthQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 15, text: '393 days');
        $this->answerRepository->createAnswer(questionId: 15, text: '549 days');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 15, text: '687 days');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 15, answerId: $correctAnswer->id);
    }

    private function createAnswersForSixthQuestion(): void
    {
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 16, text: '0');
        $this->answerRepository->createAnswer(questionId: 16, text: '3');
        $this->answerRepository->createAnswer(questionId: 16, text: '7');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 16, answerId: $correctAnswer->id);
    }

    private function createAnswersForSeventhQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 17, text: 'Hope');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 17, text: 'Opportunity');
        $this->answerRepository->createAnswer(questionId: 17, text: 'Mimi');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 17, answerId: $correctAnswer->id);
    }

    private function createAnswersForEightQuestion(): void
    {
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 18, text: 'Mars 3');
        $this->answerRepository->createAnswer(questionId: 18, text: 'Kosmos 419');
        $this->answerRepository->createAnswer(questionId: 18, text: 'Korabl 5');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 18, answerId: $correctAnswer->id);
    }

    private function createAnswersForNinthQuestion(): void
    {
        $this->answerRepository->createAnswer(questionId: 19, text: 'Vallis Snellius');
        $this->answerRepository->createAnswer(questionId: 19, text: 'Sleipnir Fossa');
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 19, text: 'Valles Marineris');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 19, answerId: $correctAnswer->id);
    }

    private function createAnswersForTenthQuestion(): void
    {
        $correctAnswer = $this->answerRepository->createAnswer(questionId: 20, text: 'India');
        $this->answerRepository->createAnswer(questionId: 20, text: 'USA');
        $this->answerRepository->createAnswer(questionId: 20, text: 'China');

        $this->correctAnswerRepository->createCorrectAnswer(questionId: 20, answerId: $correctAnswer->id);
    }
}
