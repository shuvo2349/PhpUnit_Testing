<?php
class DateFormatter {
 protected $stamp;

 public function __construct(DateTime $stamp)
 {
 $this->stamp = $stamp;
 }

 public function getStamp()
 {
 return $this->stamp;
 }
 }

class AssertInstanceTesting extends TestCase {
public function testStampMustBeInstanceOfDateTime()
{
$date = new DateFormatter(new DateTime);

$this->assertInstanceOf('DateTime', $date->getStamp()); // true
 }
}