<?php

namespace Bekwoh\LaravelBlacklist;

use Bekwoh\LaravelBlacklist\Commands\LaravelBlacklistCommand;
use Illuminate\Support\Facades\Validator;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelBlacklistServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-blacklist')
            ->hasConfigFile()
            ->hasCommand(LaravelBlacklistCommand::class);
    }
}
