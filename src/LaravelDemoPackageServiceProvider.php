<?php

namespace ImoTikuwa\LaravelDemoPackage;

use ImoTikuwa\LaravelDemoPackage\Commands\LaravelDemoPackageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDemoPackageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-demo-package')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_demo_package_table')
            ->hasCommand(LaravelDemoPackageCommand::class);
    }
}
