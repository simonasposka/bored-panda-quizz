<?php

namespace App\Providers;

use App\Repositories\Answer\AnswerRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\CorrectAnswer\CorrectAnswerRepository;
use App\Repositories\CorrectAnswer\CorrectAnswerRepositoryInterface;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Outcome\OutcomeRepository;
use App\Repositories\Outcome\OutcomeRepositoryInterface;
use App\Repositories\AnswerOutcome\AnswerOutcomeRepository;
use App\Repositories\AnswerOutcome\AnswerOutcomeRepositoryInterface;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\Quizz\QuizzRepository;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        URL::forceScheme('https');
        $this->app->singleton(ImageRepositoryInterface::class, function () { return new ImageRepository(); });
        $this->app->singleton(QuizzRepositoryInterface::class, function () { return new QuizzRepository(); });
        $this->app->singleton(QuestionRepositoryInterface::class, function () { return new QuestionRepository(); });
        $this->app->singleton(AnswerRepositoryInterface::class, function () { return new AnswerRepository(); });
        $this->app->singleton(OutcomeRepositoryInterface::class, function () { return new OutcomeRepository(); });
        $this->app->singleton(AnswerOutcomeRepositoryInterface::class, function () { return new AnswerOutcomeRepository(); });
        $this->app->singleton(CorrectAnswerRepositoryInterface::class, function () { return new CorrectAnswerRepository(); });
    }
}
