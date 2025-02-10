<?php
    
    $showalert = false;
    $showError = false;
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'subtask/db.php';
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];

        // Check if username already exists
        $existsql = "SELECT * FROM user WHERE username = '$username'";
        $result = mysqli_query($conn, $existsql);
        
        if (!$result) {
            die("Query Failed: " . mysqli_error($conn));
        }
        
        $numExistRows = mysqli_num_rows($result);
        
        if ($numExistRows > 0) {
            $showError = "Username already exists";
        } else {
            // Check if passwords match
            if ($password == $cpassword) {

                $hash = password_hash($password, PASSWORD_DEFAULT);

                $sql = "INSERT INTO user (username, password, dt) VALUES ('$username', '$hash', current_timestamp())";
                $result = mysqli_query($conn, $sql);
                
                if ($result) {
                    $showalert = true;
                } else {
                    $showError = "Error creating user: " . mysqli_error($conn);
                }
            } else {
                $showError = "Passwords do not match";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php require 'subtask/nav.php'; ?>
    
    <div class="container my-4">
        <h1 class="text-center">Signup to our website</h1>
        
        <?php if ($showalert): ?>
            <div class="alert alert-success">Your account has been created. You can now log in.</div>
        <?php endif; ?>

        <?php if ($showError): ?>
            <div class="alert alert-danger">ERROR: <?php echo $showError; ?></div>
        <?php endif; ?>
        
        <form action="signup.php" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" placeholder="Enter Username" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" maxlength="23" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
