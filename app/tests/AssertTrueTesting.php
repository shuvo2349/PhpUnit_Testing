<?php
class Assert_True_Testing extends PHPUnit_Framework_TestCase {
public function testHelloWorld()
{
$greeting = 'Hello, World.';
$this->assertTrue($greeting === 'hello, World.');
 }
}