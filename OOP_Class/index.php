<?php

require "user.php";

$user1 = new User("gobinda", "gobinda@gmail.com");

echo $user1->getEmail();
echo "<br/>";
$user1->setEmail("gobinda2@gmail.com");
echo $user1->getEmail();
echo "<br/>";
