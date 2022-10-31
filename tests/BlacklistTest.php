<?php

use Bekwoh\LaravelBlacklist\Rules\Blacklist;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

it('can install package and has blacklist configuration', function () {
    Artisan::call('blacklist:install');
    expect(
        file_exists(
            config('blacklist.path')
        )
    )->toBeTrue();
});

it('can validate disposable email', function () {
    Artisan::call('blacklist:install');

    expect(function () {
        Validator::validate([
            'email' => 'malinator.com',
        ], [
            'email' => [new Blacklist],
        ]);
    })->toThrow(ValidationException::class);
});
