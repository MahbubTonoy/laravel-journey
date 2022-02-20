<?php
class Person
{
 private $name;
 private $email;
 public function __construct($name, $email) {
  $this->name = $name;
  if(!$this->setEmail($email)) {
   throw new Exception("You Fuckin' Idiot! go to hell.");
  }
 }
 public function setName($name) {
  $this->name = $name;
 }
 public function setEmail($email) {
  if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $this->email = $email;
   return true;
  }
  return false;
 }
 public function getName() {
  return $this->name;
 }
 public function getEmail() {
  return strtolower($this->email);
 }
 public function addFriend() {
  return "Added A New Friend";
 }
}



$human = new Person("Mahbub Rashid Tonoy", "tnymrbadboy@gmail.com");

echo $human->getName();
// $human->setEmail("mahbubtonoy@gmail.com");
echo "<br/>";
echo $human->getEmail();
