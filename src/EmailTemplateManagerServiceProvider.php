<?php
namespace ahmedrady255\EmailTemplateManager;
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
            __DIR__.'/../Config/email_templates.php', 'email_templates'
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
        //load views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'EmailTemplateManager');
        // Publish assets and config files
        $this->publishes([
            __DIR__.'/../config/email-templates-manager.php' => config_path('email-templates.php-manager'),
        ]);
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/emails'),
        ], 'views');

    }
}
