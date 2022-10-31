<?php

use Illuminate\Support\Facades\Artisan;

it('can install package and has blacklist configuration', function () {
    Artisan::call('blacklist:install');
    expect(
        file_exists(
            config('blacklist.path')
        )
    )->toBeTrue();
});
