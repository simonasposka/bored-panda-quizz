<?php

namespace Database\Seeders;

use App\Repositories\Question\QuestionRepositoryInterface;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function __construct(readonly QuestionRepositoryInterface $questionRepository)
    {
    }

    public function run(): void
    {
        $this->createQuestionsForFirstQuizz();
        $this->createQuestionsForSecondQuizz();
    }

    private function createQuestionsForFirstQuizz(): void
    {
        $this->questionRepository->createQuestion(quizzId: 1, text: 'What\'s your preferred way to get around Barbieland?', imageId: 4);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'What do you usually have for breakfast?', imageId: 5);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'If you could only choose one Ken doll, which would you pick?', imageId: 6);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'Which Barbie doll is your favorite?', imageId: 7);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'Which Barbie character would you be in the Barbie movie?', imageId: 8);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'Which Barbie shoes would you like to wear in real life?', imageId: 10);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'What\'s your favorite song?', imageId: 11);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'Which color do you prefer?', imageId: 12);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'What would you do on a Friday night in Barbieland?', imageId: 13);
        $this->questionRepository->createQuestion(quizzId: 1, text: 'Which Barbie outfit would you wear?', imageId: 14);
    }

    private function createQuestionsForSecondQuizz(): void
    {
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What is the largest volcano in our solar system, which is located on Mars?', imageId: 37);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What Roman god is Mars named after?', imageId: 38);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'How many moons does Mars have?', imageId: 39);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What is the primary gas in the Martian atmosphere?', imageId: 40);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'How long is a year on Mars?', imageId: 41);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'How many rings are around Mars?', imageId: 42);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What is the name of the rover that discovered evidence of water on Mars in 2004?', imageId: 43);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What was the first spacecraft to successfully complete a soft landing on Mars?', imageId: 44);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'What is the name of the canyon on Mars that is the largest in the solar system?', imageId: 45);
        $this->questionRepository->createQuestion(quizzId: 2, text: 'Which was the first nation in the world to successfully reach Mars on its first attempt?', imageId: 46);
    }
}
