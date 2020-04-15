<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Addition;

class AdditionTest extends TestCase {

  public function testAddition() {
    $addition = new Addition();
    $this->assertEquals(2,$addition->result([1, 1]));
  }

}
