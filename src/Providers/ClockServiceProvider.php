<?php

declare(strict_types=1);

namespace AKostDev\MoonShine\Providers;

use Illuminate\Support\ServiceProvider;

final class ClockServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-clock-component');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-clock-component'),
        ], ['moonshine-clock-component-assets', 'laravel-assets']);
    }
}
