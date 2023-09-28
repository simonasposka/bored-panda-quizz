<?php

namespace App\Providers;

use App\Repositories\Image\ImageRepository;
use App\Repositories\Image\ImageRepositoryInterface;
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
    }
}
