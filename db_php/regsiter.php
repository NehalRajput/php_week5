<?php
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        // echo "Registration successful. <a href='login.php'>Login here</a>";
        header('Location:login.php');
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Register</button>
</form>
