<?php

// Class Auto Load 

function classAutoLoad($classname){

    $directories = ["contents", "layouts", "menus"];

    foreach($directories AS $dir){
        $filename = dirname(__FILE__) . DIRECTORY_SEPARATOR . $dir . DIRECTORY_SEPARATOR . $classname . ".php";
        if(file_exists($filename) AND is_readable($filename)){
            require_once $filename;
        }
    }
}

spl_autoload_register('classAutoLoad');

// Create instances of all classes
    $Objlayout = new layouts();
    $Objmenus = new menus();
    $Objheadings = new headings();
    $Objcontent = new contents();
    






// print 
// print "<br>";
// print "<br>";
// print $_SERVER["PHP_SELF"];
// print "<br>";
// print "<br>";
// print basename($_SERVER["PHP_SELF"]);
// print "<br>";
// print "<br>";
// if(file_exists("index.php") AND is_readable("index.php")){
//     print "yes";
// }else{
//     print "no";
// }