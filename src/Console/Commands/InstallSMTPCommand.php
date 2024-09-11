<?php

namespace Ahmedrady255\EmailTemplateManger\Console\Commands;

use Illuminate\Console\Command;
use function EmailTemplateManager\Console\Commands\base_path;

class InstallSMTPCommand extends Command
{
    protected $signature = 'email-template-manager:install-smtp';

    protected $description = 'Set up default SMTP settings in .env file';

    public function handle()
    {
        $envFile = base_path('.env');

        if (file_exists($envFile)) {
            file_put_contents($envFile, "\nMAIL_MAILER=smtp", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_HOST=smtp.mailtrap.io", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_PORT=587", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_USERNAME=null", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_PASSWORD=null", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_ENCRYPTION=tls", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_FROM_ADDRESS=noreply@yourapp.com", FILE_APPEND);
            file_put_contents($envFile, "\nMAIL_FROM_NAME=YourApp", FILE_APPEND);

            $this->info('SMTP settings added to .env file');
        } else {
            $this->error('.env file not found');
        }
    }
}
