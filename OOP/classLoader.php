<?php

spl_autoload_register(function ($class) {
  $dir = "classes/";
  $ext = ".home.php";
  if(!file_exists("$dir$class$ext")) {
    return ;
  }
  require_once("$dir$class$ext");
});
