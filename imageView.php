<?php
session_start();
if(isset($_SESSION['username'])) {
    $myusername = $_SESSION['username'];
    $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
    mysqli_set_charset($con, 'utf8');
    $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$myusername'");
    $row=mysqli_fetch_array($result);
    header("Content-type: " .$row["imagetype"]);
    echo $row["photo"];
}
?>