<?php

namespace App\Providers;

use App\Queries\NewsQueryBuilder;
use App\Services\Contracts\Parser;
use App\Services\ParserService;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NewsQueryBuilder::class);
        $this->app->bind(Parser::class, ParserService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
    }
}
