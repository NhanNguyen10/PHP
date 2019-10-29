<?php


define("freeCodeCamp", "Learn to Code", false);
//Cac cach Comment
#Case Sensitive
/*
 * Variable names are case sensitive
 */
$name = "Nhan Nguyen";
$name = "Quincy";
echo "Hi! My name is " . $name . "<br>";

$greeting = "Hello";
$month = 8;
$year = 2019;
//String
$x = "Hello";
$y = "Hello!";

//Interger
$x = 5;

//Floats;

$x = 5.01;

//Booleans;
$x = true;
$y = false;

//Arrays
$colors = array("Kiên", "Nhân");


//Null
$greeting = null;

//Class and Object
#Class contains properties and methods.
#Object are instances a class and are convenient way to packgae values and function specific to a class

$name = '0\'Nhan';

$quote = nl2br("He said, \"Bạn có thể không nổi tiếng, nhưng bạn phải tin rằng mình luôn khác biệt và luôn quan trọng. \r\n Bạn sẽ luôn có câu trả lời mà ai đó cần\"");

echo $name;
echo $quote;
echo freeCodeCamp;

//Also, when you are creating classes, you can declare your own constants.
/*
 * class Human {
 * const TYPE_MALE = 'm';
 * const TYPE_FEMALE = 'f';
 * const TYPE_UNKNOWN = 'u'; // When user didn't select his gender

  .............
}
 */
echo "<br>";
echo nl2br("Note: If you want to use those constants inside the Human class, you can refer them as self::CONSTANT_NAME. If you want to use them outside the class, you need to refer them as Human::CONSTANT_NAME.");

//TERNARY OPERATOR
#If/ Else Statement
/*
if ($user == !null)
{
 $message = 'Hello '. $user;
} else {
    $message = 'Hello Guest';
}

#Ternary operator
$message = 'Hello' . ($user == !NULL ? $user :  'Guest');
*/
//For loop

//While Loop

//For each LOOP

//FUNCTIONS
#Simple Function +Call
function say_hello()
{
    return "Hello!";
}

echo say_hello();

#Simple Function + Parameter + Call
function say_hello01($friend)
{
    return "Hello " . $friend . "!";
}

echo say_hello01('Tommy');


$freecodecamp02 = array("free", "code", "camp");
sort($freecodecamp02);
print_r($freecodecamp02);

//FORM