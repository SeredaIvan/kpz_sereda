<?php

function autoload($className)
{
    $file = __DIR__ . '\\' .  $className . '.php';

    if (file_exists($file)) {
        include_once($file);
    } else {
        echo "File not found: $file";
    }
}

spl_autoload_register('autoload');
