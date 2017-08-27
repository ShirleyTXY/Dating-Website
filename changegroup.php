<?php
session_start();
$user = $_REQUEST['user'];
$con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($con, 'utf8');
$myusername=$_SESSION['username'];
$newgroup= $_REQUEST['newgroup'];

$group = mysqli_query($con,"SELECT * FROM friendgroup WHERE username = '$myusername' AND usergroup='$newgroup'");
$groupexist = mysqli_fetch_array($group);
if (!$groupexist) {
    if (!empty(grouptext)) {
        $addgroup = mysqli_query($con,"INSERT INTO friendgroup(username,usergroup) VALUES('$myusername','$newgroup')");

    }
}
echo "$newgroup";

$matchresult = mysqli_query($con,"UPDATE matchlist SET user2group='$newgroup' WHERE user1='$myusername'AND user2='$user'");
header("location:view_profile.php?user=$user&delete=0&like=0");

?>