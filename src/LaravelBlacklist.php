<?php

namespace Bekwoh\LaravelBlacklist;

use Illuminate\Support\Facades\Cache;

class LaravelBlacklist
{
    public static function list()
    {
        return Cache::remember('laravel-blacklist::disposable.email.domains', 60, function () {
            return json_decode(
                file_get_contents(
                    config('blacklist.path')
                )
            );
        });
    }
}
