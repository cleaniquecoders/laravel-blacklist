<?php

namespace CleaniqueCoders\LaravelBlacklist\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \CleaniqueCoders\LaravelBlacklist\LaravelBlacklist
 */
class LaravelBlacklist extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \CleaniqueCoders\LaravelBlacklist\LaravelBlacklist::class;
    }
}
