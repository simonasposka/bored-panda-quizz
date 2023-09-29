<?php

namespace Database\Seeders;

use App\Repositories\Answer\AnswerRepositoryInterface;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    public function __construct(readonly AnswerRepositoryInterface $answerRepository)
    {
    }

    public function run(): void
    {
        $this->answerRepository->createAnswer(questionId: 1, text: 'Barbie Car', imageId: 14);
        $this->answerRepository->createAnswer(questionId: 1, text: 'Rollerblades', imageId: 15);

        $this->answerRepository->createAnswer(questionId: 2, text: 'Toast with Butter', imageId: 16);
        $this->answerRepository->createAnswer(questionId: 2, text: 'Doughnut and Coffee', imageId: 17);

        $this->answerRepository->createAnswer(questionId: 3, text: 'Western Ken', imageId: 18);
        $this->answerRepository->createAnswer(questionId: 3, text: 'Surfboard Ken', imageId: 19);
        $this->answerRepository->createAnswer(questionId: 3, text: 'Fashionista Ken', imageId: 20);

        $this->answerRepository->createAnswer(questionId: 4, text: 'Original Barbie', imageId: 21);
        $this->answerRepository->createAnswer(questionId: 4, text: 'Totally Hair Barbie', imageId: 22);
        $this->answerRepository->createAnswer(questionId: 4, text: 'Mermaid Barbie', imageId: 23);

        $this->answerRepository->createAnswer(questionId: 5, text: 'President Barbie', imageId: 24);
        $this->answerRepository->createAnswer(questionId: 5, text: 'Weird Barbie', imageId: 25);
        $this->answerRepository->createAnswer(questionId: 5, text: 'Mermaid Barbie', imageId: 26);

        $this->answerRepository->createAnswer(questionId: 6, text: '', imageId: 27); // Image only
        $this->answerRepository->createAnswer(questionId: 6, text: '', imageId: 28); // Image only
        $this->answerRepository->createAnswer(questionId: 6, text: '', imageId: 29); // Image only

        $this->answerRepository->createAnswer(questionId: 7, text: '"Push" by Matchbox 20');
        $this->answerRepository->createAnswer(questionId: 7, text: '"Barbie Girl" by Aqua');
        $this->answerRepository->createAnswer(questionId: 7, text: '"Closer to Fine" by The Indigo Girls');

        $this->answerRepository->createAnswer(questionId: 8, text: '', imageId: 30); // Image only
        $this->answerRepository->createAnswer(questionId: 8, text: '', imageId: 31); // Image only

        $this->answerRepository->createAnswer(questionId: 9, text: 'Night out with the girls');
        $this->answerRepository->createAnswer(questionId: 9, text: 'Movie marathon');
        $this->answerRepository->createAnswer(questionId: 9, text: 'Cruise in your convertible');
        $this->answerRepository->createAnswer(questionId: 9, text: 'Practice your guitar');

        $this->answerRepository->createAnswer(questionId: 10, text: 'Barbie Athletic Outfit', imageId: 32);
        $this->answerRepository->createAnswer(questionId: 10, text: 'Barbie Movie Outfit', imageId: 33);
        $this->answerRepository->createAnswer(questionId: 10, text: 'Roller Blade Outfit', imageId: 34);
    }
}
