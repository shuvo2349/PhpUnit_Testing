<?php

class AssertContainsTesting {
    public function test_contains()
    {
    $names = ['Taylor', 'Shawn', 'Dayle'];
    $this->assertContains('Dayle', $names);
    }

} 