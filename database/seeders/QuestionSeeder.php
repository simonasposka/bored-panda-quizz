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
}
