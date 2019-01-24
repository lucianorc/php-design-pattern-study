<?php

class NotifierFactory
{
    public static function getNotifier($notifier, $to): Notifier
    {
        $notifiers = array(
            'SMS' => function (string $to) {
                return new SMS($to);
            },
            'Email' => function (string $to) {
                return new Email($to, 'Luciano');
            }
        );

        if(isset($notifiers[$notifier])) {
            return $notifiers[$notifier]($to);
        }

        throw new Exception("Notifier invalid");

    }
}