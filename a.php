<?php

echo "Running test from: " . PHP_VERSION . PHP_EOL;

// Comment this line to trigger other errors
require_once __DIR__ . '/unconditional.php';

require_once __DIR__ . '/b.php';
require_once __DIR__ . '/c.php';

$a = new Already_Defined();

// Uncommenting the top require_once would cause an error here
require_once __DIR__ . '/unconditional.php';

try {
    // Uncommenting this line would cause fatal errors
    // class Already_Defined {};

    // Uncommenting the top require_once would cause an error here
    require_once __DIR__ . '/unconditional.php';
} catch ( Error $e ) {
    echo "Creating the class unconditionally would error." . PHP_EOL;
    var_dump($e);
}

echo "Ran to completion, created class instance: " . get_class($a) . PHP_EOL;
