<?php

spl_autoload_register(function ($class) {
    $file = str_replace('\\', '/', $class).'.php';
    echo "Autoloading : " . $file . "\n";
    require_once $file;
});
