<?php

namespace App\Services\Transformers\Quizz;

use App\Models\Quizz;
use App\Services\Factories\QuizzTransformerFactory;

class QuizzTransformer
{
    public function __construct(
        readonly QuizzTransformerFactory $quizzTransformerFactory) {}

    public function transform(Quizz $quizz): BaseTransformedQuizz
    {
        $transformer = $this->quizzTransformerFactory->create($quizz->type);

        return $transformer->transform($quizz);
    }
}
