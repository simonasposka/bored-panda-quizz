<?php

namespace App\Http\Controllers;

use App\Models\Quizz;
use Inertia\Response;

class WelcomeController extends Controller
{
    public function index(): Response
    {
        $quizzes = Quizz::all();

        return Inertia('Welcome', [
            'quizzes' => $quizzes,
        ]);
    }
}
