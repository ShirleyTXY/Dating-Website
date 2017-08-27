<!DOCTYPE HTML>
<?php
session_start();
$myusername = $_SESSION['username'];
$con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($con, 'utf8');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register</title>

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
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
                                <li><a href="search.php">Search</a></li>
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
                            <?php }  else {?>
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
$unfollow=$_REQUEST['unfollow'];
$like=$_REQUEST['like'];
if ($unfollow==1) {
    $eventname=$_REQUEST['eventname'];
    $q = "DELETE FROM follow WHERE username = '$myusername' AND eventname = '$eventname'";
    $r = mysqli_query ($con, $q); // Run the query.
    if ($r) {
        $success_message = " You have unfollowed the event.";
    }
}
if($like==1) {
    $eventname=$_REQUEST['eventname'];
    $eventuser=$_REQUEST['eventuser'];
    $already_like=mysqli_query($con,"SELECT * FROM like_event WHERE eventuser='$eventuser' AND eventname='$eventname' AND username='$myusername'");
    if($already_like->num_rows == 0) {
        echo "1";
        $thisevent=mysqli_query($con,"SELECT * FROM event WHERE username='$eventuser' AND eventname='$eventname'");
        $thisevent=mysqli_fetch_array($thisevent);
        $like_number=$thisevent['like_number']+1;
        $q = "UPDATE event SET like_number='$like_number' WHERE username='$eventuser' AND eventname='$eventname'";
        $r = mysqli_query ($con, $q); // Run the query.
        $p = "INSERT INTO like_event(username, eventuser, eventname) VALUES ('$myusername', '$eventuser', '$eventname')";
        $r = mysqli_query ($con, $p); // Run the query
        if ($r) {
            $all_events=mysqli_query($con,"SELECT * FROM event WHERE 1=1 ORDER BY submitdate DESC");
            $success_message = " You have liked the event successfully!";
        }
    }else {
        $success_message = " You have already liked the event!";
    }
}
    $followed_event=mysqli_query($con,"SELECT * FROM follow WHERE username = '$myusername'");
?>
<div class="follow_event">
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <a href="index.php"><i class="fa fa-home home_1"></i></a>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Followed Events</li>
                </ul>
            </div>
        </div>
        <div class="form-group">
            <?php if(!empty($success_message)) { ?>
                <div class="success-message"><?php echo $success_message; ?></div>
            <?php } ?>
            <?php  if ($followed_event->num_rows==0) {
                $success_message="You haven't follow any event."; ?>
                <div class="success-message"><?php echo $success_message;?>Click <a href="view_events.php">HERE </a> to find more.</div>
            <?php } ?>
        </div>
        <?php if($followed_event->num_rows > 0) { ?>
            <?php while($row=mysqli_fetch_array($followed_event)) {
                $username = $row['eventuser'];
                $eventname = $row['eventname'];
                $row = mysqli_query($con, "SELECT * FROM event WHERE username = '$username' AND eventname='$eventname'");
                if ($row->num_rows > 0) {
                    $row = mysqli_fetch_array($row);
                    ?>

                    <form class="form-horizontal">
                        <div class="container">
                            <div class="form-group col-sm-9">
                                <div
                                    style="border:1px solid rgba(135,135,135,0.27);padding:10px 10px;background :#ffffff">
                                    <h2><?php echo $row['eventname'] ?></h2>
                                    <p class="text-primary">Time: <?php echo $row['eventdate'] ?>
                                        at <?php echo $row['eventtime'] ?></p>
                                    <p>Location: <?php echo $row['location'] ?></p>
                                    <p><?php echo $row['description'] ?></p>
                                </div>
                            </div>
                            <div class="col-sm-3" >
                                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);margin-top: 30px">

                                    <a href="followed_events.php?eventname=<?php echo $eventname; ?>&eventuser=<?php echo $username; ?>&like=1&unfollow=0" type="button" name="like" class="btn btn-danger" style="width:100px"><span class="glyphicon glyphicon-thumbs-up" aria-hidden="true">x<?php echo $row['like_number']?></span></a>
                                </div>
                                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);margin-top: 90px">
                                    <a href="followed_events.php?eventname=<?php echo $row['eventname']; ?>&eventuser=<?php echo $row['eventuser']; ?>&unfollow=1&like=0" type="button" name="unfollow" class="btn btn-warning" style="width:100px"> Unfollow</a>
                                </div>
                            </div>
                        </div>
                        </div>

                    </form>
                <?php }
            }
            mysqli_free_result($followed_event);
            $con->close();
        } ?>
    </div>
</div>
</body>
</html>