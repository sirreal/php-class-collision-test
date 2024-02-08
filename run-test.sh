docker build --quiet --file ./Dockerfile.php7 --tag demo-php-70 .
docker build --quiet --file ./Dockerfile.php8 --tag demo-php-83 .

docker run demo-php-70 || echo "Errored."
echo "---"
docker run demo-php-83 || echo "Errored."
