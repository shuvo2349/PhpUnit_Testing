<?php
class Assert_Equal_Testing extends PHPUnit_Framework_TestCase {
    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';
        $this->assertEquals('Hell, World.', $greeting);
    }
}