<?php

namespace Bekwoh\LaravelBlacklist\Rules;

use Bekwoh\LaravelBlacklist\LaravelBlacklist;
use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Str;

class Blacklist implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {
        $domain = Str::after(strtolower($value), '@');

        if (in_array($domain, LaravelBlacklist::list())) {
            $fail("Invalid email domain $domain used.");
        }
    }
}
