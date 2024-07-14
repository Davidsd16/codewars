<?php

class MyTest extends TestCase
{
    public function testSampleTests() {
      echo("Testing for number of pillars: 1, distance: 10 m and width: 10 cm<br>");
      $this->assertSame(0, pillars(1, 10, 10));
      echo("Testing for number of pillars: 2, distance: 20 m and width: 25 cm<br>");
      $this->assertSame(2000, pillars(2, 20, 25));
      echo("Testing for number of pillars: 11, distance: 15 m and width: 30 cm<br>");
      $this->assertSame(15270, pillars(11, 15, 30));
    }
}

?>