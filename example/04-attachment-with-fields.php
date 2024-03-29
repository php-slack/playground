<?php

$incomingWebhook = include './config/webhook.php';

/** @var \Maknz\Slack\Client|\Maknz\Slack\Message $client */
$client = new Maknz\Slack\Client($incomingWebhook);


$client
    ->attach([
        'pretext'  => 'New alert from the monitoring system',
        'text'     => 'Current server stats',
        'color'    => 'danger',
        'fields'   => [
            [
                'title' => 'CPU usage',
                'value' => '90%',
                'short' => true // whether the field is short enough to sit side-by-side other fields, defaults to false
            ],
            [
                'title' => 'RAM usage',
                'value' => '2.5GB of 4GB',
                'short' => true,
            ],
        ],
    ])->send('Test message with *fields* in attachment.')
;
