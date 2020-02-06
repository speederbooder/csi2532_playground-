<?php
namespace Samplephp\Test;

use Samplephp\Message;
use PHPUnit\Framework\TestCase;

class MessageTest extends TestCase
{
    public function testHelloNoInput()
    {
        $this->assertEquals("Hello World", Message::hello());
    }

    public function testHelloNullInput()
    {
        $this->assertEquals("Hello World", Message::hello(null));
    }

    public function testHelloNameInput()
    {
        $this->assertEquals("Hello Andrew", Message::hello("Andrew"));
    }
}
