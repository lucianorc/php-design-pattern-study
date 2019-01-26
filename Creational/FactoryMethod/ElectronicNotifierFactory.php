<?php

class ElectronicNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to): Notifier
    {
        if(empty($notifier)) {
            throw new Exception("No notifier passed");
        }

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

        return new Exception("Notifier invalid");
    }
}