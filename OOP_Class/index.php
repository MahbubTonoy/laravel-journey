<?php

class Test {
  static $x = "Hello World";
  public static function printHello() {
    echo "Hello World";
  }
}

echo Test::$x;