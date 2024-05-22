<?php

function autoload($className)
{
    $file = str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        include_once($file);
    }
}
