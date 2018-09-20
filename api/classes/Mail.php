<?php


class Mail
{
//Quote $quote
    public function send(Quote $quote)
    {
        require __DIR__.'/../templates/email.php';

        $transport = (new Swift_SmtpTransport('ssl0.ovh.net', 587))
            ->setUsername('dev@karudev-informatique.fr')
            ->setPassword('developpeur');
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Karudev-informatique, votre estimation'))
            ->setFrom(['s.renault@karudev-informatique.fr'])
            ->setTo([$quote->getEmail()])
            ->setBody($html, 'text/html');
        $mailer->send($message);
    }
}
