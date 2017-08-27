
<?php
session_start();
$con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($con, 'utf8');
$user1 = $_SESSION['username'];
$user2 = $_REQUEST['user'];

$delete = "DELETE FROM relation WHERE user1='$user1' AND user2 ='$user2'";
$deleteresult = mysqli_query($con,$delete);

$deletematch1 = mysqli_query($con,"DELETE FROM matchlist WHERE user1='$user1' AND user2 ='$user2'");
$deletematch2 = mysqli_query($con,"DELETE FROM matchlist WHERE user1='$user2' AND user2 ='$user1'");
if ($deleteresult) {
    header("location:view_profile.php?user=$user2&delete=1&like=0");
} else {
    $error =  "Please try again.";
}
?>
