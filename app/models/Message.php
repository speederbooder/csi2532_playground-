<?php
namespace Samplephp;

class Message
{
    public static function hello($name = null)
    {
        $name = $name ?: "World";
        return "Hello {$name}";
    }
}