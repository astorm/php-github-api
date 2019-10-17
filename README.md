# php-github-api

A [composer metapackage](https://getcomposer.org/doc/04-schema.md#type) that makes [the great KnpLabs/php-github-api](https://github.com/KnpLabs/php-github-api) package slightly easier to work with.

## How to Use

Just run

    $ composer require pulsestorm/php-github-api

and you should be good to go.  This package will install `knplabs/github-api` **and** the defacto-default `php-http/guzzle6-adapter` adapter.  With those installed you can pull in your composer autoloader and start programming.

    <?php
    // makes composer packages avaiable to your program -- if you're
    // using a PHP framework with composer support this probably
    // already happens.
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

If you need more help the [actual project repository's README.md](https://github.com/KnpLabs/php-github-api) has everything you need to get started.
