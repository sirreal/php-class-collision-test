<?php


echo "Running test from: " . PHP_VERSION . PHP_EOL;

class A
{
    public function log()
    {
        echo "Called " . __FILE__ . PHP_EOL;
    }
}

require __DIR__ . '/b.php';

$a = new A;

$a->log();

echo "Ran to completion, created class instance: " . get_class($a) . PHP_EOL;
