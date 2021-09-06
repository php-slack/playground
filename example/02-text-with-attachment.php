<?php

use Maknz\Slack\Attachment;

$incomingWebhook = 'https://hooks.slack.com/services/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';

/** @var \Maknz\Slack\Client|\Maknz\Slack\Message $client */
$client = new Maknz\Slack\Client($incomingWebhook);


$client
    ->attach([
        'text' => 'Attachment text here. (No color set)',
    ])
    ->attach([
        'text'  => 'Attachment with `good` color',
        'color' => 'good',
    ])
    ->attach([
        'text'  => 'Attachment with `warning` color',
        'color' => 'warning',
    ])
    ->attach(new Attachment([
        'text'  => 'Attachment with `warning` color',
        'color' => 'danger',
    ]))
    ->attach(new Attachment([
        'text'  => 'Attachment with color `#439FE0`',
        'color' => '#439FE0',
    ]))
    ->send('Test message with attachment. (Using `$client->attach()`)')
;
