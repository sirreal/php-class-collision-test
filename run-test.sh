#!/usr/bin/env bash

docker build --quiet --file ./Dockerfile.php70 --tag demo-php-70 . > /dev/null
docker build --quiet --file ./Dockerfile.php74 --tag demo-php-74 . > /dev/null
docker build --quiet --file ./Dockerfile.php8 --tag demo-php-83 . > /dev/null

docker run demo-php-70 || echo "Errored."
echo "---"
docker run demo-php-74 || echo "Errored."
echo "---"
docker run demo-php-83 || echo "Errored."
