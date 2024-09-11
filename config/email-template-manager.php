<?php

return [
    'smtp' => [
        'default_sender' => [
            'email' => env('MAIL_FROM_ADDRESS', 'noreply@yourapp.com'),
            'name' => env('MAIL_FROM_NAME', 'Your App'),
        ],

        'smtp_settings' => [
            'mailer' => env('MAIL_MAILER', 'smtp'),
            'host' => env('MAIL_HOST', 'smtp.mailtrap.io'),
            'port' => env('MAIL_PORT', 587),
            'username' => env('MAIL_USERNAME', null),
            'password' => env('MAIL_PASSWORD', null),
            'encryption' => env('MAIL_ENCRYPTION', 'tls'),
            'from_address' => env('MAIL_FROM_ADDRESS', 'noreply@example.com'),
            'from_name' => env('MAIL_FROM_NAME', 'Example App'),
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Email Layouts
    |--------------------------------------------------------------------------
    |
    | Define the default layouts to be used for different email types.
    | You can reference these layouts in the Blade views of the emails.
    |
    */

    'layouts' => [
        'welcome_email'          => 'layouts.email_welcome',
        'password_reset'         => 'layouts.email_password_reset',
        'order_confirmation'     => 'layouts.email_order_confirmation',
        'shipping_notification'  => 'layouts.email_shipping',
        'account_activation'     => 'layouts.email_activation',
        'newsletter'             => 'layouts.email_newsletter',
        'invoice'                => 'layouts.email_invoice',
        'event_invitation'       => 'layouts.email_event',
        'survey_request'         => 'layouts.email_survey',
        'subscription_renewal'   => 'layouts.email_subscription',
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Email Sender
    |--------------------------------------------------------------------------
    |
    | Define the default sender's name and email address to be used when
    | sending emails. You can customize these settings for each email type.
    |
    */

    'default_sender' => [
        'name' => env('MAIL_FROM_NAME', 'Example App'),
        'email' => env('MAIL_FROM_ADDRESS', 'noreply@example.com'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Types
    |--------------------------------------------------------------------------
    |
    | A list of available email types in your system. You can refer to these
    | types when creating or managing email templates.
    |
    */

    'email_types' => [
        'welcome_email'          => 'Welcome Email',
        'password_reset'         => 'Password Reset Email',
        'order_confirmation'     => 'Order Confirmation Email',
        'shipping_notification'  => 'Shipping Notification Email',
        'account_activation'     => 'Account Activation Email',
        'newsletter'             => 'Newsletter Email',
        'invoice'                => 'Invoice Email',
        'event_invitation'       => 'Event Invitation Email',
        'survey_request'         => 'Survey Request Email',
        'subscription_renewal'   => 'Subscription Renewal Email',
    ],

    /*
    |--------------------------------------------------------------------------
    | Email Storage Paths
    |--------------------------------------------------------------------------
    |
    | The directory path where email templates and views are stored.
    | This can be customized if necessary.
    |
    */

    'template_storage_path' => base_path('resources/views/emails'),

    /*
    |--------------------------------------------------------------------------
    | Default Fallback Template
    |--------------------------------------------------------------------------
    |
    | If an email template for a specific type is not found, use this fallback
    | template to avoid breaking email functionality.
    |
    */

    'fallback_template' => 'emails.default',

];
