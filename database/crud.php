<?php
include 'db.php';

$name = "Nehal";
$email = "nehal@example.com";
$age = 21;




$sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', $age)";
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
