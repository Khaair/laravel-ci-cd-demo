<?php

namespace App\Providers;

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
        if ($this->app->runningInConsole()) {
            return;
        }

        // Codespaces (and other reverse proxies) forward the public host via headers.
        // Without this, route() links point at http://localhost:8080.
        $forwardedHost = $_SERVER['HTTP_X_FORWARDED_HOST'] ?? null;

        if ($forwardedHost) {
            $scheme = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? 'https';
            URL::forceRootUrl(rtrim("{$scheme}://{$forwardedHost}", '/'));
            URL::forceScheme($scheme);
        }
    }
}
