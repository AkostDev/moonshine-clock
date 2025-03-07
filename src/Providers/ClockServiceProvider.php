<?php

declare(strict_types=1);

namespace AKostDev\MoonShine\Providers;

use Illuminate\Support\ServiceProvider;

final class ClockServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-clock');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-clock'),
        ], ['moonshine-clock-assets', 'laravel-assets']);
    }
}
