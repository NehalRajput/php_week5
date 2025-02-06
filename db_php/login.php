<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login_system");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if (password_verify($password, $row['password'])) {  // Verify hashed password
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}

$conn->close();
?>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br>
    <input type="password" name="password" placeholder="Password" required><br>
    <button type="submit">Login</button>
</form>
