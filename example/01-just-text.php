<?php

$incomingWebhook = 'https://hooks.slack.com/services/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';

$client = new Maknz\Slack\Client($incomingWebhook);

$client->send('This is just simple text');
