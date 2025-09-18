<?php

$conn = mysqli_connect("localhost","root","","stud");

if($conn){
    die("Successful");
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM instructors WHERE username = $username AND password=$password";

$result = mysqli_query ($conn, $sql);

if (mysqli_num_rows($result) ){
    echo("Successful");
} else{
    echo("Error Again!");
}
mysqli_close($conn);
?>