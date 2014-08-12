# Wikiba.se website

This repo contains the resources of the [wikiba.se website](http://wikiba.se).

## Build

Get [Sculpin](https://sculpin.io/) if you do not have it yet:

    curl -O https://download.sculpin.io/sculpin.phar
    chmod +x sculpin.phar
    mv sculpin.phar /usr/bin/sculpin

Run the install command:

    sculpin install
    sculpin generate --watch --server
