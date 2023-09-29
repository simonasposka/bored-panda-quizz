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
        $this->quizzRepository->createQuizz(title: 'Gotta “Ash Ketchum” All: Which Pokémon Trainer Would Be YOUR Bestie?', quizzType: QuizzType::ANSWER, description: 'Don\'t cheat and pik(achu) too early - go through the quiz one question at a time and find out if you\'d be friends with Agatha or Ash!', imageId: 2);
        $this->quizzRepository->createQuizz(title: 'Which Disney Villain Era Are You In?', quizzType: QuizzType::POLL, description: 'Mirror, mirror on the wall - I\'m villain ready, I hear the call...', imageId: 3);
    }
}
