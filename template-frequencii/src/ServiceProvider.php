<?php

namespace Ijpatricio\SkimTemplateFrequencii;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ServiceProvider extends PackageServiceProvider
{
    public static string $name = 'skim';

    public static string $viewNamespace = 'skim';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name);

        if (file_exists($package->basePath('/../resources/views'))) {
            $package->hasViews(static::$viewNamespace);
        }
    }

    public function packageRegistered(): void{}

    public function packageBooted(): void
    {
        $skim = $this->app->make(\Ijpatricio\Skim\Skim::class);

        $skim->register(
            __DIR__ . '/..', 'skim-template-frequencii'
        );

        // Temporary Views for first Library
        $this->loadViewsFrom(__DIR__ . '/../views', 'skim-template-frequencii');

        $this->publishes([
            __DIR__ . '/../assets' => public_path('skim-templates/frequencii'),
        ], 'skim-template-frequencii-assets');
    }

    protected function getAssetPackageName(): ?string
    {
        return 'ijpatricio/skim-template-frequencii';
    }

    /**
     * @return array<Asset>
     */
    protected function getAssets(): array
    {
        return [];
    }

    /**
     * @return array<class-string>
     */
    protected function getCommands(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getIcons(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getRoutes(): array
    {
        return [];
    }

    /**
     * @return array<string, mixed>
     */
    protected function getScriptData(): array
    {
        return [];
    }

    /**
     * @return array<string>
     */
    protected function getMigrations(): array
    {
        return [];
    }
}
