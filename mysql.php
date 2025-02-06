<?php
echo "Welcome we are ready to connet the database";


//two ways for connecting the database
//1 mysql extension
      //it has two parts 
        //1 procedure 
        //2 object -oriented

//2.pdo
//conecting database

$servername = "localhost";
$username  =  "root";
$password = "";


$conn = mysqli_connect($servername , $username , $password);

 if(!$conn)
 {
    die("sorry we failed to connect:". mysqli_connect_error());

 }
 else
 {
    echo "connection was successfully";

 }
?>
