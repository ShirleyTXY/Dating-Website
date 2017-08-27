<!DOCTYPE HTML>
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

<body>

<?php
session_start();
if(isset($_SESSION['username'])) {
    $myusername = $_SESSION['username'];
    $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
    mysqli_set_charset($con, 'utf8');
    $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$myusername'");
    $row=mysqli_fetch_array($result);
    $mygender = $row['gender'];
    $mylocation = $row['location'];
    $mypreference = $row['preference'];
    $myeducation = $row['education'];
    $myoccupation = $row['occupation'];
    $myinterest = $row['interest'];
    $mybirthyear = $row['birthyear'];
    $mybirthmonth = $row['birthmonth'];
    $mybirthday = $row['birthday'];

}
?>
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

<div class="grid_3">
    <div class="container-fluid">
        <div class="breadcrumb1">
            <ul>
            <a href="index.php"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">View Profile</li>
            </ul>
        </div>
        <div class="profile">
            <div class="col-sm-6" align="center">
                <img src="imageView.php" width="40%" height="40%"/>

            </div>
            <div class="col-sm-6">
                <table class="table_working_hours">
                    <tbody>
                    <tr>
                        <td>Username :</td>
                        <td><?php echo "$myusername" ?> </td>
					</tr>
                    <tr>
                        <td>Gender :</td>
                        <td><?php echo "$mygender"; ?></td>
                    </tr>
                    <tr>
                        <td>Preference :</td>
                        <td><?php echo "$mypreference"; ?></td>
                    </tr>

                    <tr>
						<td>Birthday :</td>
                        <td><?php echo "$mybirthday"; ?> / <?php echo "$mybirthday"; ?> / <?php echo "$mybirthyear"; ?></td>
					</tr>
                    <tr>
                        <td>Location :</td>
                        <td><?php echo "$mylocation"; ?></td>
                    </tr>
                    <tr>
                        <td>Education :</td>
                        <td><?php echo "$myeducation"; ?></td>
                    </tr>
                    <tr>
                        <td>Occupation :</td>
                        <td><?php echo "$myoccupation"; ?></td>
                    </tr>
                    <tr>
                        <td>Interest :</td>
                        <td><?php echo "$myinterest"; ?></td>
                    </tr>
                    </tbody>
                    <div class="clearfix"> </div>
                </table>
                <div class="col-sm-8 row_1 ">
                    <a href="edit_profile.php" type="button" class="btn btn-danger btn-sm btn-block"> Change My File <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>	