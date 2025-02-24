<?php

namespace ImoTikuwa\LaravelDemoPackage\Commands;

use Illuminate\Console\Command;

class LaravelDemoPackageCommand extends Command
{
    public $signature = 'laravel-demo-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
