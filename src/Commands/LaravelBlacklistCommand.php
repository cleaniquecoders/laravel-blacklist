<?php

namespace CleaniqueCoders\LaravelBlacklist\Commands;

use Illuminate\Console\Command;

class LaravelBlacklistCommand extends Command
{
    public $signature = 'blacklist:install';

    public $description = 'Install Laravel Blacklist';

    public function handle(): int
    {
        $target = config('blacklist.path');

        if (file_exists($target)) {
            unlink($target);
        }

        $directory = dirname($target);

        if (! file_exists($directory)) {
            mkdir($directory);
        }

        $source = __DIR__.'/../../storage/data/disposable-email-domain.json';

        copy($source, $target);

        if (! file_exists($target)) {
            $this->error("Unable to created $target");

            return self::FAILURE;
        }

        $this->comment('Blacklist installed.');

        return self::SUCCESS;
    }
}
