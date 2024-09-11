<?php
namespace ahmedrady255\EmailTemplateManager\Services;
use Illuminate\Support\Facades\Mail;
use function EmailTemplateManager\config;

class EmailService
{
    /**
     * Send a customized email based on the email type and data.
     *
     * @param string $emailType The type of email (e.g., 'welcome_email', 'order_confirmation').
     * @param array $data The data to be passed to the email template.
     * @param string $recipientEmail The recipient's email address.
     * @param string|null $recipientName The recipient's name (optional).
     * @return void
     */
    public function sendEmail(string $emailType, array $data, string $recipientEmail, string $recipientName = null)
    {
        $emailTemplate = config("email_templates.layouts.{$emailType}");

        if (!$emailTemplate) {
            $emailTemplate = config('email_templates.fallback_template', 'emails.default');
        }


        Mail::send($emailTemplate, $data, function ($message) use ($recipientEmail, $recipientName, $emailType) {
            $message->to($recipientEmail, $recipientName)
                ->subject(config("email_templates.email_types.{$emailType}") . ' - ' . config('app.name'));

            $message->from(config('email_templates.default_sender.email'), config('email_templates.default_sender.name'));
        });
    }
}
