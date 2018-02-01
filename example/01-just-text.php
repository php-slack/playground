<?php

$incomingWebhook = 'https://hooks.slack.com/services/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';

$client = new Maknz\Slack\Client($incomingWebhook);

$client->send('This just simple text');
