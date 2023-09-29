<?php

namespace App\Http\Controllers;

use App\Repositories\Quizz\QuizzRepositoryInterface;
use Symfony\Component\HttpFoundation\Response;

class QuizzesController extends Controller
{
    public function __construct(readonly QuizzRepositoryInterface $quizzRepository)
    {
    }

    public function show(string $slug): \Inertia\Response
    {
        $quizz = $this->quizzRepository->tryFindBySlugWithImageAndQuestions($slug);

        if (is_null($quizz)) {
            abort(Response::HTTP_NOT_FOUND);
        }

        return Inertia('ShowQuizz', [
            'quizz' => $quizz,
        ]);
    }
}
