<?php
class Math
{
 public function add($first, $second)
 {
  return $first + $second;
 }
 public function sub($first, $second)
 {
  return $first - $second;
 }
 public function mul($first, $second)
 {
  return $first * $second;
 }
 public function div($first, $second)
 {
  return $first / $second;
 }
}

class HigherMath extends Math {
 public function complex($first, $second) {
  return $this->add($first, $second) + $this->sub($first, $second);
 }
}