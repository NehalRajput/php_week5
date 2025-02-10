<?php
include 'db.php';

$id = 1; 
$new_name = "Jane Doe";

$sql = "UPDATE users SET name='$new_name' WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
