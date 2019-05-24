<?php

namespace App\ActionsOnInstall;

use App\Support\BaseAction;

class MakeAuth extends BaseAction
{
    /**
     * Makes the authentication scaffolding.
     *
     * @return void
     */
    public function __invoke(): void
    {
        $directory = config('lambo.store.project_path');

        $makeAuth = config('lambo.config.auth');

        if ($makeAuth !== false) {
            $this->console->info('Scaffolding authentication...');
            $this->shell->inDirectory($directory, 'php artisan make:auth');
        }
    }
}