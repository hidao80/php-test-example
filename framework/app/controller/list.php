<?php
namespace App;

class ListController {
  public function sum($numbers) {
    $sum = 0;
    foreach($numbers as $number) {
      $sum += $number;
    }
    return $sum;
  }

  public function pow($base, $power) {
    return $base * $power;
  }

  public function sort($arr, $isAsc = true) {
    $result = $isAsc ? sort($arr) : rsort($arr);
    return $arr;
  }
}