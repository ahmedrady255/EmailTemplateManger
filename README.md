# Email Template Manager for Laravel

A Laravel package for managing email templates with built-in SMTP configuration.

## Features

- Manage and customize email templates.
- Send emails with different types using predefined templates.
- Simple SMTP configuration and integration.
- Easy-to-use API for sending emails.

## Installation

### 1. Install the Package

You can install the package via Composer:

```bash
composer require ahmedrady255/email-template-manager
```
### 3. Install SMTP Configuration (Optional)

Run the SMTP installation command to set up default SMTP settings:

```bash
php artisan email-template-manager:install-smtp
```

## Configuration

### SMTP Settings

The package uses SMTP for sending emails. You can configure the SMTP settings in your `.env` file or in the `config/email_templates.php` configuration file.

**Example `.env` settings:**

```dotenv
MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@example.com
MAIL_FROM_NAME="${APP_NAME}"
```

### Email Templates

Define and customize email templates in the `resources/views/vendor/email-templates/` directory. By default, this directory contains the template files you can modify.

**Example template:**

`resources/views/vendor/email-templates/welcome_email.blade.php`

```blade
<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Service</title>
</head>
<body>
    <h1>Hello {{ $name }},</h1>
    <p>Thank you for signing up for our service!</p>
    <p>Best regards,</p>
    <p>The Team</p>
</body>
</html>
```

## Usage

### Sending an Email
You can send email by add the service to your controller 

**Example Request:**

```php
<?php

namespace EmailTemplateManager\Http\Controllers;

use Illuminate\Http\Request;
use EmailTemplateManager\Services\EmailService;

class EmailController extends Controller
{
    protected $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function sendEmail(Request $request)
    {
        $emailType = $request->input('email_type'); // Email type (welcome, order, etc.)
        $recipient = $request->input('email');
        $data = $request->all();

        $this->emailService->sendEmail($emailType, $data, $recipient);

        return response()->json(['message' => 'Email sent successfully.']);
    }
}

```

### Testing

To ensure everything works correctly, you can run the package tests:

```bash
php artisan test
```

## Contributing

1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Commit your changes.
4. Push to the branch and create a pull request.

## License

This package is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Support

For issues or questions, please create an issue on [GitHub Issues](https://github.com/your-namespace/email-template-manager/issues).
