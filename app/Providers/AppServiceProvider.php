<?php

namespace App\Providers;

use App\Repositories\Answer\AnswerRepository;
use App\Repositories\Answer\AnswerRepositoryInterface;
use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
use App\Repositories\Question\QuestionRepository;
use App\Repositories\Question\QuestionRepositoryInterface;
use App\Repositories\Quizz\QuizzRepository;
use App\Repositories\Quizz\QuizzRepositoryInterface;
use Illuminate\Foundation\Application;
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
        $this->app->singleton(ImageRepositoryInterface::class, function (Application $app) { return new ImageRepository(); });
        $this->app->singleton(QuizzRepositoryInterface::class, function (Application $app) { return new QuizzRepository(); });
        $this->app->singleton(QuestionRepositoryInterface::class, function (Application $app) { return new QuestionRepository(); });
        $this->app->singleton(AnswerRepositoryInterface::class, function (Application $app) { return new AnswerRepository(); });
    }
}
