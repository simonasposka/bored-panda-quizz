<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizzesController;


Route::get('/', [QuizzesController::class, 'index'])->name('quizzes.index');
Route::get('/quizzes/{slug}', [QuizzesController::class, 'show'])->name('quizzes.show');

