<?php
require 'vendor/autoload.php';

$token = 'ab...3e'; # https://help.github.com/en/articles/creating-a-personal-access-token-for-the-command-line
$client = new \Github\Client();
$client->authenticate($token,null,\Github\Client::AUTH_HTTP_TOKEN);

// used the github API to download a file from the
// KnpLabs/php-github-api repository
$file = $client->api('repo')->contents()
        ->download('KnpLabs', 'php-github-api', 'composer.json');

echo "Downloaded","\n";
echo $file;
