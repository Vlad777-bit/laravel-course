<?php

namespace App\Providers;

use App\Contracts\IParser;
use App\Contracts\ISocialNetwork;
use App\Services\ParserService;
use App\Services\SocialNetworkService;
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
        $this->app->bind(IParser::class, ParserService::class);
        $this->app->bind(ISocialNetwork::class, SocialNetworkService::class);
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
