# Wikiba.se website

This repo contains the resources of the [wikiba.se website](http://wikiba.se).

## Installation

Get [Sculpin](https://sculpin.io/) if you do not have it yet:

    curl -O https://download.sculpin.io/sculpin.phar
    chmod +x sculpin.phar
    mv sculpin.phar /usr/bin/sculpin

Run the install command:

    composer install

## Site generation

For development:

    sculpin generate --watch --server
    
For deployment:

    sculpin generate --env=prod

## Running the tests

Change into the root directory of the project and run

    phpunit

Note that you need to have "sculpin" available as command.