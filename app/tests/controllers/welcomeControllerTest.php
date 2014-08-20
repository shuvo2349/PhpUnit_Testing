<?php
class welcomeControllerTest extends TestCase {

    public function testLoadingwelcomeSayhello(){

        $this->call('GET','welcome/sayhello');
        $this->assertResponseOk();
    }

    public function testHello() {
        $this->call('GET','welcome/sayhello');
        $this->assertViewHas('anExampleArraykey');
    }
}