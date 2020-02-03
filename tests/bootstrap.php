<?php

function __autoload($fullName)
{
    $parts = explode("\\", $fullName);
    $len = count($parts);
    $className = $parts[$len - 1];
    if (file_exists("app/models/{$className}.php"))
    {
      require_once "app/models/{$className}.php";
    }
}