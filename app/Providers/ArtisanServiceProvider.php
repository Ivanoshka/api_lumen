<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Registra los comandos de Artisan aquí
        $this->commands([
            \Illuminate\Database\Console\Migrations\MigrateCommand::class,
            \Illuminate\Database\Console\Migrations\RollbackCommand::class,
            \Illuminate\Database\Console\Migrations\ResetCommand::class,
            \Illuminate\Database\Console\Migrations\RefreshCommand::class,
            \Illuminate\Database\Console\Migrations\InstallCommand::class,
            \Illuminate\Database\Console\Migrations\MigrateMakeCommand::class,
            \Illuminate\Database\Console\Migrations\StatusCommand::class,
            \Illuminate\Database\Console\Seeds\SeedCommand::class,
            \Illuminate\Database\Console\Seeds\SeederMakeCommand::class,
            \Illuminate\Foundation\Console\ModelMakeCommand::class,
            \Illuminate\Foundation\Console\JobMakeCommand::class,
            \Illuminate\Foundation\Console\MailMakeCommand::class,
            \Illuminate\Foundation\Console\RequestMakeCommand::class,
            \Illuminate\Routing\Console\ControllerMakeCommand::class, // Añadir comando make:controller
            \Illuminate\Foundation\Console\ConfigCacheCommand::class,
             // Añadir comando config:clear
            \Illuminate\Foundation\Console\ConfigClearCommand::class,
        ]);
    }
}
