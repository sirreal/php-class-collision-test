<?php

if (class_exists('Already_Defined') ) {
    return;
}

class Already_Defined {
    public function __construct() {
        echo 'Initialized from ' . __FILE__ . PHP_EOL;
    }
}
