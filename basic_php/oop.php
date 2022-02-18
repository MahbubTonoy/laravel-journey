<?php
// require("math.php");

// $math = new Math;
// $higherMath = new HigherMath;

// echo $math->add(12,33);
// echo "<br/>";
// echo $higherMath->complex(12,33);

// class DeconstructTest {
//  public $test;
//  function __construct($test)
//  {
//   $this->test = $test;
//  }
//  function __destruct()
//  {
//   echo "this is {$this->test}";
//  }
// }

// echo "Hello World<br/>";
// $test = new DeconstructTest("tonoy");
// echo "Hello World<br/>";

class Test1 {
 public $x = 1;
 protected $y = 2;
 private $z = 2;
 public function printFunc() {
  echo $this->x;
 }
}
class Test2 extends Test1{
 public function test() {
  echo $this->y;
 }
}

$test1 = new Test2();
$test1->printFunc();

echo "<br/>";

$test2 = new Test2();
$test2->x = 2;
$test2->test();

