<?php

namespace Bekwoh\LaravelBlacklist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Bekwoh\LaravelBlacklist\LaravelBlacklist
 */
class LaravelBlacklist extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Bekwoh\LaravelBlacklist\LaravelBlacklist::class;
    }
}
