<?php

namespace CleaniqueCoders\LaravelBlacklist\Rules;

use CleaniqueCoders\LaravelBlacklist\LaravelBlacklist;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Str;

class Blacklist implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $domain = Str::after(strtolower($value), '@');

        if (in_array($domain, LaravelBlacklist::list())) {
            $fail("Invalid email domain $domain used.");
        }
    }
}
