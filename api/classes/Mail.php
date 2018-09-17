<?php
require __DIR__ . '/classes/Quote.php';

class Mail
{
    static public function send(Quote $quote)
    {
        {
            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('dev@karudev-informatique.fr')
                ->setTo($quote->getEmail())
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'api/registration.html.twig',
                        array('name' => $name)
                    ),
                    'text/html'
                )
            ;
            $mailer->send($message);
            return $this->render(...);
        }

    }
}
