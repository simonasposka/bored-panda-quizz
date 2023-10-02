<?php

namespace App\Services\Transformers\Quizz;

use App\Models\Quizz;

interface QuizzTransformerInterface
{
    public function transform(Quizz $quizz): BaseTransformedQuizz;
}
