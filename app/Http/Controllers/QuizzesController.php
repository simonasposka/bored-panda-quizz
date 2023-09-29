<?php

namespace App\Http\Controllers;

use App\Services\QuizzService;
use Inertia\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class QuizzesController extends Controller
{
    public function __construct(readonly QuizzService $quizzService)
    {
    }

    public function show(string $slug): Response
    {
        $quizz = $this->quizzService->tryFindBySlug($slug);

        if (is_null($quizz)) {
            abort(SymfonyResponse::HTTP_NOT_FOUND);
        }

        return Inertia('ShowQuizz', [
            'quizz' => $quizz,
        ]);
    }
}
