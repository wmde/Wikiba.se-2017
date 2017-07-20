# Wikiba.se website

This repo contains the resources of the [wikiba.se website](http://wikiba.se).

[![Build Status](https://travis-ci.org/wmde/Wikiba.se.svg?branch=master)](https://travis-ci.org/wmde/Wikiba.se)

## Installation

Run the install command:

    composer install

## Site generation

For development:

    vendor/bin/sculpin generate --watch --server
    
For deployment:

    vendor/bin/sculpin generate --env=prod

## Running the tests

Change into the root directory of the project and run

    phpunit
