<?php
require_once('user_details.php');

$obj = new user_details();

$obj = new user_details();

$arr = ["black", "white", "green", "red"];

foreach ($arr AS $color){
    print $color. "<br>";
}

print dirname(__FILE__); // function returns directory name from a path
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"]; // returns the filename of the currently executing script
print "<br>";
print "<br>";
print basename($_SERVER["PHP_SELF"]); // returns the filename component of the path

?>