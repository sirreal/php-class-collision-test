<?php

echo "Hello from b!" . PHP_EOL;

if (class_exists('A')) {
    return;
}

class A
{
    public function log()
    {
        echo "Called " . __FILE__ . PHP_EOL;
    }
}
