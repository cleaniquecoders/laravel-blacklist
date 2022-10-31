<?php

namespace Bekwoh\LaravelBlacklist\Rules;

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

        if (in_array($domain, disposable_email_domains())) {
            $fail("Invalid email domain $domain used.");
        }
    }
}
