<?php

class fnc{
     var $fname;
     public $username;
     var $yob;
     protected $email_address;
     private $password;

     public function computer_user($fname){
        return $fname;
    }

    public function user_age($name, $yob){
      $age = date('Y') - $yob;   
      return $name . " is " . $age; 
    }

}

$obj = new fnc();

print $obj->user_age("Alex", 2004);

?>