<?php
include 'db.php';

$id = 2; 

$sql = "DELETE FROM users WHERE id=$id";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
