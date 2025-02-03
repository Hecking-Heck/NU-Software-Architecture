<?php
 
// this is a variable
$name = "Aiden";
 
// this is a function
function sayHello($text) {
   // we return a value from the function
   return "Hello " . $text;
}
 
// when we call the function a string is returned
// so we can echo it
echo sayHello($name);

// Extra Stuff

$data["name"] = "Aiden";
$data["id"] = "w23016485";
$data["level"] = 5;
 
// encode the data in JSON format
header('Content-Type: application/json');
echo json_encode($data);