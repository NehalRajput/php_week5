<?php
$email = "test@example.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Valid email";
} else {
    echo "Invalid email";
}
?>

<?php
$name = filter_input(INPUT_GET, "name", FILTER_SANITIZE_STRING);
echo "Hello, " . $name;
?>
