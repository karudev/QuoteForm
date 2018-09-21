<?php


class Mail
{
    public function send(Quote $quote)
    {
        require __DIR__.'/../templates/email.php';

        $transport = (new Swift_SmtpTransport(SMTP_ADDRESS, SMTP_PORT))
            ->setUsername(SMTP_USERNAME)
            ->setPassword(SMTP_PASSWORD);
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Karudev Informatique : Votre estimation'))
            ->setFrom(['d.renault@karudev-informatique.fr'])
            ->setTo([$quote->getEmail()])
            ->setBody($html, 'text/html');
        $mailer->send($message);
    }
}
