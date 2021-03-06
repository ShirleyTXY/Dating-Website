<?php
session_start();
?>

<!DOCTYPE HTML>
<?php
if (isset($_SESSION['username']) ) {
    $num = 10;
    $day = 7;
    $viewing = $_REQUEST['user'];
    $myusername = $_SESSION['username'];
    if (!isset($_COOKIE[$myusername]) ) {
        setcookie($myusername, $viewing, time() + 3600 * $day);
        @$datastr = $_COOKIE[$myusername];
    }
    if (isset($_COOKIE[$myusername])) {
        $datastr = $_COOKIE[$myusername];
        $ids = explode('|', $datastr);
        if (count($ids) < $num) {
            if (!in_array($viewing, $ids)) {
                $datastr .= '|' . $viewing;
                setcookie($myusername, $datastr, time() + 3600 * $day);
            }
        } else {
            if (!in_array($viewing, $ids)) {
                $datastr = str_replace($ids[0] . '|', '', $datastr);
                $datastr .= '|' . $viewing;
                setcookie($myusername, $datastr, time() + 3600 * $day);
            }
        }
    }
}


?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Home</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <!----font-Awesome----->
    <link href="css/font-awesome.css" rel="stylesheet">
    <script>
        $(document).ready(function(){
            $(".dropdown").hover(
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                    $(this).toggleClass('open');
                },
                function() {
                    $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                    $(this).toggleClass('open');
                }
            );
        });
    </script>
</head>

<style>
    .error-message {
        padding: 7px 10px;
        background: #fff1f2;
        border: #ffd5da 1px solid;
        color: #d6001c;
        border-radius: 4px;
    }
    .success-message {
        padding: 7px 10px;
        background: #cae0c4;
        border: #c3d0b5 1px solid;
        color: #027506;
        border-radius: 4px;
    }
</style>
<body>

<!-- ============================  Navigation Start =========================== -->
<div class="navbar navbar-inverse-blue navbar">

    <!--<div class="navbar navbar-inverse-blue navbar-fixed-top">-->
    <div class="navbar-inner">
        <div class="container">
            <div class="navigation">
                <nav id="colorNav">
                    <ul>
                        <li class="green">
                            <a href="#" class="icon-home"></a>
                            <ul>
                                <li><a href="login.php">Login</a></li>
                                <li><a href="register.php">Register</a></li>

                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <a class="brand" href=" "><font size = "6" color="#f0ffff">Mr & Ms Right</font></a >
            <div class="pull-right">
                <nav class="navbar nav_bottom" role="navigation">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav nav_1">
                            <li><a href="index.php">Home</a></li>
                            <?php if(isset($_SESSION['username'])) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Matches<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li><a href="matches.php">New Matches !</a></li>

                                        <li><a href="favoriteme.php">Who <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> me & not matches</a></li>

                                        <li><a href="ifavorite.php">I <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> whom & not matches</a></li>

                                    </ul>
                                </li>
                            <?php } ?>
                            <?php if(isset($_SESSION['username'])) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Events<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="add_new_events.php">Add New Events</a></li>
                                        <li><a href="created_event.php">Created Events</a></li>
                                        <li><a href="followed_events.php?like=<?php echo 0;?>&unfollow=<?php echo 0;?>">Followed Events</a></li>
                                        <li><a href="view_events.php?like=<?php echo 0;?>&follow=<?php echo 0;?>">View New Events</a></li>
                                    </ul>
                                </li>
                            <?php }  else  { ?>
                                <li><a href="view_events.php">Events</a></li>
                            <?php } ?>


                            <?php if(isset($_SESSION['username'])) { ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account<span class="caret"></span></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="my_profile.php">My Profile</a></li>
                                        <li><a href="logout.php">Log out</a></li>
                                    </ul>
                                </li>
                            <?php } ?>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </nav>
            </div> <!-- end pull-right -->
            <div class="clearfix"> </div>
        </div> <!-- end container -->
    </div> <!-- end navbar-inner -->
</div> <!-- end navbar-inverse-blue -->
<!-- ============================  Navigation End ============================ -->
<?php

$con = new mysqli ('localhost','root','','datingwebsite')
OR die ('Could not connect to MySQL: ' . $conn->connect_error);
$r = $_REQUEST['user'];
$sql="SELECT * FROM users WHERE username='$r'";
$result=$con->query($sql);
$row=mysqli_fetch_array($result);
$user1 = $_SESSION['username'];
$check ="SELECT * FROM relation WHERE user1 = '$user1' AND user2 = '$r'";
$checkresult = mysqli_query($con,$check);
$row1 = mysqli_fetch_array($checkresult);
if ($_REQUEST['delete'] == 1) {
    $deletemessage = "You canceled your like!";
}
if ($_REQUEST['like'] == 1) {
    $likemessage = "You like this user!";
}

$matchresult = mysqli_query($con,"SELECT * FROM matchlist WHERE user1 = '$user1' AND user2 = '$r'");

$match=mysqli_fetch_array($matchresult);
if ($match) {
    $matchgroup = $match['user2group'];
}

?>


<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <a href="index.php"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">View Profile</li>
            </ul>
        </div>
        <div class="profile">
            <div class="col-md-12 profile_left">
                <div class="col_3">

                    <div class="col-sm-6 row_1">
                        <div class="flexslider", align="center">
                            <img src="imageViewOther.php?user=<?php echo $r; ?>" width="80%" height="80%"/>
                        </div>
                    </div>
                    <div class="col-sm-6 row_1 " align="center">
                            <table class="table_working_hours">
                                <tbody>
                                <div>
                                <?php if(!empty($deletemessage)) { ?>
                                    <div class="success-message"><?php if(isset($deletemessage)) echo $deletemessage; ?></div>
                                <?php } ?>
                                </div>
                                <div>
                                    <?php if(!empty($likemessage)) { ?>
                                        <div class="success-message"><?php if(isset($likemessage)) echo $likemessage; ?></div>
                                    <?php } ?>
                                </div>
                                <tr class="opened_1">

                                    <td>Email :</td>
                                    <?php if ($match) { ?>
                                    <td> <?php echo $row['email']?></td>
                                    <?php } else { ?>
                                        <td style="color:crimson"> Only matched friend can see the user's email</td>
                                    <?php } ?>
                                </tr>
                                <tr class="opened_1">
                                    <td>Name :</td>
                                    <td> <?php echo $row['username']?></td>
                                </tr>
                                <tr class="opened_1">
                                    <td>Age :</td>
                                    <td><?php echo date("Y")-$row['birthyear']?></td>
                                </tr>
                                <tr class="opened_1">
                                    <td>Location :</td>
                                    <td ><?php echo $row['location']?></td>
                                </tr>

                                <tr class="opened_1">
                                    <td>Education :</td>
                                    <td ><?php echo $row['education']?></td>
                                </tr>

                                <tr class="opened_1">
                                    <td>Occupation :</td>
                                    <td ><?php echo $row['occupation']?></td>
                                </tr>

                                <tr class="opened_1">
                                    <td>Interest :</td>
                                    <td><?php echo $row['interest']?></td>
                                </tr>
                                <?php if ($match) { ?>
                                <form action="changegroup.php">
                                    <tr class="closed">
                                        <td> Group :</td>
                                        <td>

                                            <input type="text" name ="newgroup" value="<?php echo "$matchgroup";?>">

                                        </td>

                                        <td><button name="user" value=<?php echo "$r" ?>> Change</button></td></a>
                                    </tr>
                                </form>
                                <?php } ?>


                                </tbody>

                            </table>
                    </div>
                </div>


                </div>
        </div>




        <div class="col-sm-1 row_1"><h3> </h3></div>

        <?php if(empty($row1)) { ?>
            <div class="col-sm-4" >
                <a href="like.php?user=<?php echo $r;?>"><button type="submit" class="btn btn-danger btn-lg btn-block" name="likebutton">Like <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button>
            </div>
        <?php } ?>
        <?php if(!empty($row1)) { ?>

            <div class="col-sm-4" >
                <a href="unlike.php?user=<?php echo $r;?>"><button type="submit" class="btn btn-danger btn-lg btn-block" name="unlikebutton">Cancel my like <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></button></a>
            </div>
            <div class = "col-sm-12"></div>



            <?php
            $success="";} ?>

        <div class="clearfix"> </div>
        <div class="clearfix"> <h3></h3></div>

        </div>
    </div>







</body>
</html>