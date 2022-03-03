<?php
declare(strict_types=1);
interface Pay {
  public function payment();
}

class Paypal implements Pay{
  public function payment() {

  }
  public function __construct() {
    echo "Payment By Paypal";
  }
}

class Visa implements Pay{
  public function payment() {
    
  }
  public function __construct() {
    echo "Payment By Visa";
  }
}

class Cash implements Pay{
  public function payment() {
    
  }
  public function __construct() {
    echo "Payment By Cash";
  }
}

class Buy {
  public function __construct(Pay $test)
  {
    
  }
}

$cash = new Cash();
$pay = new Buy($cash);
