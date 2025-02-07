<?php

setcookie("user", "John Doe", time() + 3600, "/");
echo "Cookie has been set!";



if (isset($_COOKIE["user"])) {
    echo "Welcome, " . $_COOKIE["user"];
} else {
    echo "Cookie is not set.";
}


setcookie("user", "", time() - 3600, "/"); // Set expiry to past time
echo "Cookie has been deleted.";



?>
