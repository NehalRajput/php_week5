<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basci php</title>
</head>
<body style="background-color:aquamarine; font-family: 'Times New Roman', Times, serif; font-size:larger; color:black;">

<?php
echo "hello world";


$name = "nehal";   // String 
$age = 20;        // Integer
$price = 99.99;   // Float
$isAdmin = true;  // Boolean

$name ="rajput";

echo "Name: $name <br> Age: $age <br> Price: $price <br> Admin: $isAdmin<br>";



?>



<?php
$a = 10; //this is  example for opertro
$b = 5;

$sum = $a + $b;
$isGreater = $a > $b;
$isBothTrue = ($a > 0) && ($b > 0);

echo "Sum: $sum, Is Greater: $isGreater, Both True: $isBothTrue <br><br> ";
?>

<?php  
$age = 20; //this is example for  control flow  

if ($age >= 18) {
    echo "You are an adult.";
} else {
    echo "You are a minor.";
}
?>

<?php
$score = 85;

if ($score >= 90) {
    echo "Grade: A";
} elseif ($score >= 75) {
    echo "Grade: B";
} else {
    echo "Grade: C";
}
?>

<?php
$day = "Monday"; //switch case 

switch ($day) {
    case "Monday":
        echo "Start of the week!<br><br>";
        break;
    case "Friday":
        echo "Weekend is near!";
        break;
    default:
        echo "It's a regular day.";
}
?>


<?php

for ($i = 1; $i <= 5; $i++) { //loop
    echo "Number: $i <br>";
}
?>


<?php
$x = 1; //while loop

while ($x <= 5) {
    echo "<br>Count: $x <br>";
    $x++;
}
?>

<?php
$fruits = ["Apple", "Banana", "Mango"]; //for each loop 

foreach ($fruits as $fruit) {
    echo "Fruit: $fruit <br>";
}
?>
<?php
// Ask the user for their age
echo "Please enter your age: ";
$userAge = trim(fgets(STDIN)); // Get user input

// Check if the user is old enough to drive
if ($userAge >= 18) {
    echo "You are allowed to drive!";
} else {
    echo "Sorry, you are not old enough to drive.";
}
?>

<?php
// Get a number input from the user
$number = 3;  // Example number, can be modified or taken from user input

// Switch case to match the number to the day of the week
switch ($number) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thursday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalid number! Please enter a number between 1 and 7.";
}
?>


</body>
</html>




