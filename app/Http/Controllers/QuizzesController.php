<?php

namespace App\Http\Controllers;

use App\Services\QuizzService;
use App\Services\Transformers\Quizz\QuizzTransformer;
use Inertia\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class QuizzesController extends Controller
{
    public function __construct(
        readonly QuizzService     $quizzService,
        readonly QuizzTransformer $quizzTransformer,
    ) {}

    public function show(string $slug): Response
    {
        $quizz = $this->quizzService->tryFindBySlug($slug);

        if (is_null($quizz)) {
            abort(SymfonyResponse::HTTP_NOT_FOUND);
        }

        return Inertia('ShowQuizz', [
            'quizz' => $this->quizzTransformer->transform($quizz),
        ]);
    }
}
