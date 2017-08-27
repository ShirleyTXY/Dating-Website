

<?php
session_start();
$con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($con, 'utf8');
$user1 = $_SESSION['username'];
$user2 = $_REQUEST['user'];

$like = "INSERT INTO relation(user1,user2) VALUES ('$user1','$user2')";
$likeresult = mysqli_query($con,$like);

if ($likeresult) {

    $alreadymatch = mysqli_query($con,"SELECT * FROM matchlist WHERE user1 = '$user1' AND user2 = '$user2'");
    $row=mysqli_fetch_array($alreadymatch);

if (empty($row)) {
    $matchresult = mysqli_query($con,"SELECT * FROM relation WHERE user1 = '$user2' AND user2 = '$user1'");
    $matchrow = mysqli_fetch_array($matchresult);
    if ($matchrow) {
        $addtomatch1 = mysqli_query($con,"INSERT INTO matchlist(user1,user2) VALUES ('$user1','$user2')");
        $addtomatch2 = mysqli_query($con,"INSERT INTO matchlist(user1,user2) VALUES ('$user2','$user1')");
    }
}

    header("location:view_profile.php?user=$user2&delete=0&like=1");
} else {
    $error =  "Please try again.";
}


?>
