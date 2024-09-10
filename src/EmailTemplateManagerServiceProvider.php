<?php

namespace vendor\EmailTemplateManager\Providers;

use Illuminate\Support\ServiceProvider;

class EmailTemplateManagerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // Register configurations
        $this->mergeConfigFrom(
            __DIR__.'/Config/email_templates.php', 'email_templates'
        );
        $this->commands([
            \EmailTemplateManager\Console\Commands\InstallSMTPCommand::class,
        ]);

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //load Routes
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        //load views
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'EmailTemplateManager');
        // Publish assets and config files
        $this->publishes([
            __DIR__.'/Config/email_templates.php' => config_path('email_templates.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/email-templates'),
        ], 'views');

    }
}
