<?php

class Addition {

  public function result($values) {

    $result = 0;

    foreach ($values as $value) {
      $result += $value;
    }

    return $result * 2;

  }

}
