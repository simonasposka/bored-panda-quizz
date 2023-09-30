<?php

namespace Database\Seeders;

use App\Enums\QuizzType;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use Illuminate\Database\Seeder;

class QuizzSeeder extends Seeder
{
    public const BARBIE_AND_KEN_QUIZZ_ID = 1;

    public function __construct(readonly QuizzRepositoryInterface $quizzRepository)
    {
    }

    public function run(): void
    {
        $this->quizzRepository->createQuizz(title: 'Are You More of a Barbie or Ken?', quizzType: QuizzType::OUTCOME, description: 'Are you popular, independent, friendly, and generous like Barbie or are you "just Ken", attention-seeking, forthright, brash, and a bit dim-witted? This quiz will reveal the answer!', imageId: 1);
        $this->quizzRepository->createQuizz(title: 'You Have to Be a GENIUS to Ace This Quiz About Mars', quizzType: QuizzType::PICK_CORRECT, description: 'From its history to its geology and everything in between, Mars is a planet that’s been on our radar (literally) for centuries. So whether you\'re a space enthusiast or just love a good adventure, our quiz on Mars will take you on an interstellar ride. Are you ready to explore the mysteries of the fourth planet from the sun? Then let’s go ahead and test test your knowledge of all things Martian. ', imageId: 2);
    }
}
