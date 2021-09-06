<?php

$incomingWebhook = 'https://hooks.slack.com/services/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';

/** @var \Maknz\Slack\Client|\Maknz\Slack\Message $client */
$client = new Maknz\Slack\Client($incomingWebhook);


$client
    ->attach([
        'text'    => 'For this attachment we add buttons only with urls.',
        'color'   => '#439FE0',
        'actions' => [
            [
                //'type' => 'button',                                    // <-- default value (can omit)
                'text' => 'Packagist',
                'url'  => 'https://packagist.org/packages/alek13/slack', // fully qualified http or https URL!!
            ],
            [
                'type'  => 'button',
                'text'  => 'Star us on GitHub',
                'url'   => 'https://github.com/alek13/slack',
                'style' => 'primary',
            ],
            [
                'text'  => 'Report Bug',
                'url'   => 'https://github.com/alek13/slack/issues',
                'style' => 'danger',
            ],

            /** @DANGER: this button will be @OMITTED!!! */
            [
                'text' => 'NO URL',
                'url'  => 'github.com', // <-- @NOT fully qualified http or https URL!!
            ],
        ],
    ])
    ->send('Test message with *buttons* in attachment. (Using `$client->attach()`)')
;
