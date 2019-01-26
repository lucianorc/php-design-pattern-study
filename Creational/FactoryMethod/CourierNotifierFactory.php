<?php

class CourierNotifierFactory implements NotifierFactory
{
    public static function getNotifier($notifier, $to): Notifier
    {
        if(empty($notifier)) {
            return new Exception("No notifier passed");
        }

        $notifiers = array(
            'Post' => function ($to) {
                return new Post($to);
            }
        );

        if(isset($notifiers[$notifier])) {
            return $notifiers[$notifier]($to);
        }

        return new Exception("Notifier invalid");
    }
}