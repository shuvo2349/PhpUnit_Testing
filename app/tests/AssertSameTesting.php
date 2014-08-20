<?php
class Assert_Same_Testing extends PHPUnit_Framework_TestCase {
    public function testSameValue(){

        $val = 0;
        $this->assertSame(0,$val);
    }

} 