<?php


echo "Running test from: " . PHP_VERSION . PHP_EOL;

class A
{
    public function a()
    {
        echo "Called " . __FILE__ . PHP_EOL;
    }
}

require __DIR__ . '/b.php';

$a = new A;

$a->a();

echo "Ran to completion, created class instance: " . get_class($a) . PHP_EOL;
