<?php
/**
 * Created by PhpStorm.
 * User: bcc
 * Date: 8/20/14
 * Time: 3:54 PM
 */

class StudentControllerTest extends TestCase{
public function testStudentSayhi(){
    $this->call('GET','student/sayhi');
    $this->assertResponseOk();
}
} 