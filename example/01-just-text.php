<?php

$incomingWebhook = include './config/webhook.php';

$client = new Maknz\Slack\Client($incomingWebhook);

$client->send('This is just simple text');
