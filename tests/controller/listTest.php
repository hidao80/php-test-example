<?php
namespace App;

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../../app/controller/list.php';

class ListControllerTest extends TestCase {
  public function testSum() {
    $obj = new ListController();
    $this->assertEquals(6, $obj->sum([1, 2, 3]));
    $this->assertEquals(2, $obj->sum([1, -2, 3]));
    $this->assertEquals(10, $obj->sum([1, 9]));
  }
}