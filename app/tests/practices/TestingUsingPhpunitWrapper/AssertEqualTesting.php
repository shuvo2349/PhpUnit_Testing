<?php
use Way\Tests\Assert;
use Way\Tests\Should;
class AssertEqualTesting extends TestCase {
    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';
        Should :: equal('Hello, World.', $greeting);
        Assert :: equals('Hello, World', $greeting);
    }
}