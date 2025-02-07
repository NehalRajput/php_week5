<?php 
//strlen($string) – Get String Length
$password = "mypassword";
echo strlen($password);
echo "\n";


if(strlen($password) < 8) {
    echo "Password is too short!";
} else {
    echo "Password is strong.";
}
echo "\n";

//string replace 

$text = "I hate this!";
echo str_replace("hate", "love", $text);
echo "\n";

$email = "user@example.com";
if(strpos($email, "@") !== false) {
    echo "Valid email.";
} else {
    echo "Invalid email.";
}

echo "\n";

//substr
$name = "Jonathan";
echo substr($name, 0, 5); 
echo "\n";

//lowercase
$input = "Hello";
$databaseValue = "hello";

if(strtolower($input) === strtolower($databaseValue)) {
    echo "Match!";
} else {
    echo "No match.";
}
echo "\n";
//uppercase
$username = "john_doe";
echo strtoupper($username);
echo "\n";

//ucfirst($string) – Capitalize First Letter
$name = "john";
echo ucfirst($name);
echo "\n";

///cwords($string) – Capitalize Eac first letter of each word.
$fullName = "john doe";
echo ucwords($fullName); 
echo "\n";

//trim($string) – Remove Whitespace from Both Sides
$userInput = "  hello world  ";
echo trim($userInput); 
echo "\n";

//ltrim($string) – Remove Left Whitespace

$input = "   Hello";
echo ltrim($input); 
echo "\n";

//remove the right whitespace  
$input = "Hello   ";
echo rtrim($input); 
echo "\n";

//explode($delimiter, $string) – Convert String to Array
$csv = "apple,banana,grape";
$fruits = explode(",", $csv);
print_r($fruits);
echo "\n";

//implode($glue, $array) – Convert Array to String
$fruits = ["apple", "banana", "grape"];
echo implode(",", $fruits);
echo "\n";

//string reverse 

$word = "madam";
if ($word === strrev($word)) {
    echo "It's a palindrome!";
} else {
    echo "Not a palindrome.";
}
echo "\n";

//number  formate
$price = 1234567.89;
echo number_format($price, 2);
echo "\n";

//md5 for password
$password = "mypassword";
echo md5($password);
echo "\n";

//sha1($string) – Generate SHA1 Hash
$password = "mypassword";
echo sha1($password); 
echo "\n";

//htmlspecialchars($string) – Prevent XSS Attacks
$input = "<script>alert('Hacked!');</script>";
echo htmlspecialchars($input);
echo "\n";
















?>