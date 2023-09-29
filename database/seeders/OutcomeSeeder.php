<?php

namespace Database\Seeders;

use App\Repositories\Outcome\OutcomeRepositoryInterface;
use Illuminate\Database\Seeder;

class OutcomeSeeder extends Seeder
{
    public const OUTCOME_BARBIE_ID = 1;
    public const OUTCOME_KEN_ID = 2;

    public function __construct(readonly OutcomeRepositoryInterface $outcomeRepository)
    {
    }

    public function run(): void
    {
        $this->outcomeRepository->createOutcome(quizzId: QuizzSeeder::BARBIE_AND_KEN_QUIZZ_ID, title: 'You are definitely Barbie!', description: 'To your friends, you are fierce, loyal, and a social butterfly. You are popular, fun, and friendly to everyone you meet. In the mirror, you see yourself as important and strongly believe you can make a difference in the world. Pride is your middle name and you\'re naturally well-liked.', imageId: 14);
        $this->outcomeRepository->createOutcome(quizzId: QuizzSeeder::BARBIE_AND_KEN_QUIZZ_ID, title: 'You are totally Ken!', description: 'Even though you see yourself as well-liked, deep down you have an inner need for attention. Specifically, from Barbie. When you get that attention, you\'re flying high, but without it, you develop a strange "desperate" angst that you can\'t escape from. This sometimes makes you e asy to sway and you tend to be a bit power-trippy, brash, and tempermental when you don\'t get your way.', imageId: 15);
    }
}
