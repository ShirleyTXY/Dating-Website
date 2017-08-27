<!DOCTYPE HTML>
<?php
session_start();
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

if (isset($_SESSION['username'])) {
    $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
    mysqli_set_charset($con, 'utf8');
    $myusername = $_SESSION['username'];
    $groupsql = mysqli_query($con,"SELECT * FROM friendgroup WHERE username='$myusername'");


}
if (isset($_POST['submit'])) {
    if(!isset($error_message)) {
        $con = mysqli_connect('localhost', 'root', '', 'datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
        mysqli_set_charset($con, 'utf8');
        $submitdate = date('Y-m-d H:i:s');
        $username = $_SESSION['username'];
        $eventname = $_POST['eventname'];
        $location = $_POST['location'];
        $eventdate = $_POST['date'];
        $eventtime = ($_POST['time']);
        $description = $_POST['description'];
        if (strpos($eventdate, '/') !== false) {
            $symble = '/';
            $eventdate=str_replace($symble,"/",$eventdate);
        }
        if (strpos($eventdate, ' ') !== false) {
            $symble = ' ';
            $eventdate=str_replace($symble,"/",$eventdate);
        }
        if (strpos($eventdate, '.') !== false) {
            $symble = '.';
            $eventdate=str_replace($symble,"/",$eventdate);
        }
        if (strpos($eventdate, ':') !== false) {
            $symble = ':';
            $eventdate=str_replace($symble,"/",$eventdate);
        }
        if (strpos($eventdate, ',') !== false) {
            $symble = ',';
            $eventdate=str_replace($symble,"/",$eventdate);
        }
        if (empty($symble)) {
            $error_message = "Please insert a correct date.";
        } else {
            $date = explode("/", $eventdate);
            for ($i = 0; $i < count($date); $i++) {
                if ($date[$i] > 40) {
                    $year = $date[$i];
                    $year_index = $i;
                }
            }
            if (empty($year)) {
                $month = $date[0];
                $day = $date[1];
                $year = date('Y');
            } else {
                if ($year_index == 2) {
                    $month = $date[0];
                    $day = $date[1];
                } else if ($year_index == 0) {
                    $month = $date[1];
                    $day = $date[2];
                }
            }
            $jan_array=array("Jan","jan","01","1","January","january","JAN");
            $feb_array=array("Feb","feb","02","2","Feburary","feburary","FEB");
            $mar_array=array("Mar","mar","03","3","March","march","MAR");
            $apr_array=array("Apr","apr","04","4","April","april","APR");
            $may_array=array("May","may","05","5","MAY");
            $jun_array=array("Jun","jun","06","6","June","june","JUN");
            $july_array=array("July","july","07","7","JUL");
            $aug_array=array("Aug","aug","08","8","August","august","AUG");
            $sep_array=array("sep","Sep","09","9","september","September","SEP");
            $oct_array=array("Oct","oct","10","October","october","OCT");
            $nov_array=array("Nov","nov","11","November","november","NOV");
            $dec_array=array("Dec","dec","12","December","december","DEC");
            if (in_array($month, $jan_array)) {
                $month=1;
            } else if (in_array($month, $feb_array)) {
                $month=2;
            } else if (in_array($month, $mar_array)) {
                $month=3;
            } else if (in_array($month, $apr_array)) {
                $month=4;
            } else if (in_array($month, $may_array)) {
                $month=5;
            } else if (in_array($month, $jun_array)) {
                $month=6;
            } else if (in_array($month, $july_array)) {
                $month=7;
            } else if (in_array($month, $aug_array)) {
                $month=8;
            } else if (in_array($month, $sep_array)) {
                $month=9;
            } else if (in_array($month, $oct_array)) {
                $month=10;
            } else if (in_array($month, $nov_array)) {
                $month=11;
            } else if (in_array($month, $dec_array)) {
                $month=12;
            } else {
                $error_message="Please insert a correct month.";
            }
            $day=str_replace("th","",$day);
            $day=str_replace("st","",$day);
            $day=str_replace("nd","",$day);
            $day=str_replace("rd","",$day);
            if (empty($error_message)) {
                $eventdate = mktime(0, 0, 0, $month, $day, $year);
                $eventdate = date("Y/m/d", $eventdate);
            }
        }
        $pm_label = array("pm", "p.m.", "PM", "P.M.");
        $am_label = array("am", "a.m.", "AM", "A.M.");
        foreach ($pm_label as $pm) {
            if (strpos($eventtime, $pm) !== false) {
                $time_pm = str_replace($pm, "", $eventtime);
                if (strpos($time_pm, ":") == false) {
                    $hour = $time_pm + 12;
                    $min = 0;
                } else {
                    $array = explode(':', $time_pm);
                    $hour = $array[0] + 12;
                    $min = $array[1];
                }
            }
        }
        foreach ($am_label as $am) {
            if (strpos($eventtime, $am) !== false) {
                $time_am = str_replace($am, "", $eventtime);
                if (strpos($time_am, ":") == false) {
                    $hour = $time_am;
                    $min = 0;
                } else {
                    $array = explode(':', $time_am);
                    $hour = $array[0];
                    $min = $array[1];
                }
            }
        }
        if (empty($hour)) {
            if (strpos($eventtime, ":") == false) {
                $error_message = "Please insert a correct time.";
            } else {
                $array = explode(':', $eventtime);
                $hour = $array[0];
                $min = $array[1];
            }
        }

        if (empty($error_message)) {
            $privacy = $_POST['privacy'];
            $myusername = $_SESSION['username'];
            $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
            mysqli_set_charset($con, 'utf8');
            if ($privacy == "All matches friends") {
                $arr = array();
                $showto = mysqli_query($con,"SELECT * FROM matchlist WHERE user1 = '$myusername'");
                while ($showtopeople = mysqli_fetch_array($showto)) {
                    $person = $showtopeople['user2'];
                    array_push($arr,$person);
                }
                if (count($arr) > 0) {
                    $intoprivacy = implode(",",$arr);
                }
            } else if ($privacy=="Everyone") {
                $intoprivacy = 0;
            } else {
                $arr = array();
                $showto = mysqli_query($con,"SELECT * FROM matchlist WHERE user1 = '$myusername' AND user2group = '$privacy'");
                while ($showtopeople = mysqli_fetch_array($showto)) {
                    $person = $showtopeople['user2'];
                    array_push($arr,$person);
                }
                if (count($arr) > 0) {
                    $intoprivacy = implode(",",$arr);
                }
            }
        }

        if (empty($error_message)) {
            $eventtime = mktime($hour, $min, 0, $month, $day, $year);
            $eventtime = date('g:i', $eventtime);
            $checkdup = mysqli_query($con,"SELECT * FROM event WHERE username='$username' AND eventname='$eventname' 
            AND location='$location' AND eventdate='$eventdate' AND eventtime='$eventtime' AND privacy='$intoprivacy'");
            $checkdup1 = mysqli_fetch_array($checkdup);
            if (empty($checkdup1)) {
                $q = "INSERT INTO event(privacygroup,submitdate,username, eventname, location, eventdate, eventtime,description,like_number,privacy) VALUES ('$privacy','$submitdate', '$username','$eventname','$location','$eventdate','$eventtime','$description',0,'$intoprivacy')";
                $r = mysqli_query($con, $q); // Run the query.
                if ($r) {
                    $success_message = "Congratulation! You have added successfully!";
                    $error_message = "";
                } else {
                    $error_message = "Please try again.";
                }
            } else {
                $error_message="This event has already be added!";
            }


        }
    }
}
if (isset($_POST['add_tag'])) {
    $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
    mysqli_set_charset($con, 'utf8');
    $con = mysqli_connect('localhost', 'root', '', 'datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
    mysqli_set_charset($con, 'utf8');
    mysqli_set_charset($con, 'utf8');
    $username=$_SESSION['username'];
    $eventname=$_POST['eventname'];
    $tag=$_REQUEST['tag'];
    $location=$_POST['location'];
    $eventdate=$_POST['date'];
    $eventtime=$_POST['time'];
    $description=$_POST['description'];
    $check = mysqli_query($con,"SELECT * FROM tag WHERE username = '$username' AND eventname='$eventname' AND tag='$tag'");
    if (empty(mysqli_fetch_array($check))) {
        $q = "INSERT INTO tag(username, eventname, tag) VALUES ('$username', '$eventname', '$tag')";
        $r = mysqli_query ($con, $q); // Run the query
    }
    $add_tag=1;
    $all_tags=mysqli_query($con,"SELECT * FROM tag WHERE username = '$username' AND eventname='$eventname'");

} else if (isset($_POST['delete_tag'])) {
    $con = mysqli_connect('localhost', 'root', '', 'datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error());
    mysqli_set_charset($con, 'utf8');
    $tag=$_POST['tag'];
    $username=$_SESSION['username'];
    $eventname=$_POST['eventname'];
    $location=$_POST['location'];
    $eventdate=$_POST['date'];
    $eventtime=$_POST['time'];
    $description=$_POST['description'];

    $check = mysqli_query($con,"SELECT * FROM tag WHERE username = '$username' AND eventname='$eventname' AND tag='$tag'");
    if (!empty(mysqli_fetch_array($check))) {
        $q = "DELETE FROM tag WHERE username = '$username' AND eventname='$eventname' AND tag='$tag'";
        $r = mysqli_query ($con, $q); // Run the query.
    }
    $delete_tag=1;
    $all_tags=mysqli_query($con,"SELECT * FROM tag WHERE username = '$username' AND eventname='$eventname'");
}

?>
<div class="grid_3">
<form action = "add_new_events.php" method="post" enctype="multipart/form-data">
    <div class="container">
    <div class="breadcrumb1">
        <ul>
            <div class="col-md-9">
            <a href="index.php"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">Add New Events</li>
            </div>
            <div class="col-md-3">
                <button class="btn btn-default" type="submit" name="submit">Submit</button>
            </div>
        </ul>
    </div>
    <div class="form-group">
        <?php if(!empty($success_message)) { ?>
        <div class="success-message"><?php echo $success_message; ?></div>
            <?php } ?>
        <?php if(!empty($error_message)) { ?>
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
    </div>
    <div class="clearfix"> </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label for="edit-name">Event Name </label>
                <?php if(empty($add_tag) && empty($delete_tag)&& empty($error_message)) {?>
                <input type="text" name="eventname" class="form-text required" placeholder="Add a short, clear name." required="required">
                <?php }?>
                <?php if(!empty($add_tag) ||!empty($delete_tag) ||!empty($error_message)) {?>
                <input type="text" name="eventname" class="form-text required" value="<?php echo $eventname?>" required="required">
                <?php }?>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label for="edit-name">Event Location </label>
                <?php if(empty($add_tag) &&empty($delete_tag)&& empty($error_message)) {?>
                <input type="text" id="edit-name" name="location" class="form-text required" placeholder="Include a place or address." required="required">
                <?php }?>
                <?php if(!empty($add_tag)|| !empty($delete_tag)||!empty($error_message)) {?>
                <input type="text" id="edit-name" name="location" class="form-text required" value="<?php echo $location?>" required="required">
                <?php }?>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label for="edit-name">Date\Time </label>
            </div>
                <div class="col-md-2 col-md-offset-3">
                    <?php if(empty($add_tag)&&empty($delete_tag)&& empty($error_message)) {?>
                    <input type="text" id="event_date" name="date" class="form-control" placeholder="date" required="required">
                    <?php }?>
                    <?php if(!empty($add_tag)||!empty($delete_tag)|| !empty($error_message)) {?>
                    <input type="text" id="event-date" name="date" class="form-text required" value="<?php echo $eventdate?>" required="required">
                    <?php }?>
                    <!--<script>
                        var date= document.getElementById("event_date").value;
                        var dt = Date.parse(date);
                        document.getElementById("event_date").value = dt;
                    </script>-->
                </div>
                <div class="col-md-2">
                    <?php if(empty($add_tag)&&empty($delete_tag)&& empty($error_message)) {?>
                    <input type="text" id="edit-name" name="time" class="form-control" placeholder="time" required="required">
                    <?php }?>
                    <?php if(!empty($add_tag)||!empty($delete_tag)|| !empty($error_message)) {?>
                    <input type="text" id="edit-name" name="time" class="form-text required" value="<?php echo $eventtime?>" required="required">
                    <?php }?>
                </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label for="edit-name">Tag </label>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-offset-3">
                <?php if(!empty($add_tag)||!empty($delete_tag)) {?>
                    <?php if($all_tags->num_rows > 0) { ?>
                        <?php while($row=mysqli_fetch_array($all_tags)) {?>
                            <div class="col-md-1">
                                <input class="btn btn-link" type="button" value="<?php echo $row['tag']?>">
                            </div>
                        <?php }?>
                        <?php mysqli_free_result($all_tags);
                        $con->close();
                    }?>
                <?php }?>
            </div>
            <div class="clearfix"> </div>
            <div class="col-md-3 col-md-offset-3">
                <input type="text" id="edit-name" name="tag" class="form-control" placeholder="Enter a tag for the event."">
            </div>
            <div class="col-md-3">
                <button class="btn btn-danger " type="submit" name="add_tag">add</button>
                <button class="btn btn-primary" type="submit" name="delete_tag">delete</button>
            </div>
        </div>
    </div>

        <div class="form-group">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <label for="edit-name">Show to : </label>


                    <div class="age_box1" style="max-width: 100%; display: inline-block;">

                        <select name = "privacy" required="required">
                            <option value="Everyone">Everyone</option>
                            <option value="All matched friends">All matched friends</option>

                            <?php while($group = mysqli_fetch_array($groupsql)) { ?>

                                <option value="<?php echo $group['usergroup']; ?>" >Matched friends in group "<?php echo $group['usergroup']; ?>"</option>
                            <?php } ?>
                        </select>
                    </div>


                </div>
            </div>
            <div class="clearfix"> </div>
        </div>



    <div class="form-group">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <label for="edit-name">Description </label>
                <div class="textarea-container">
                    <?php if(!empty($add_tag)||!empty($delete_tag)|| !empty($error_message)) {?>

                    <textarea type="text" name="description" placeholder="<?php echo "$description"; ?>"></textarea>
                    <div class="textarea-size"></div>
                    <?php } ?>

                    <?php if(empty($add_tag)&&empty($delete_tag)&& empty($error_message)) {?>
                    <textarea type="text" name="description"></textarea>
                        <div class="textarea-size"></div>

                    <?php } ?>

                </div>
                <style>
                    .textarea-container {
                        position: relative;
                        width: 100%;
                    }
                    textarea, .textarea-size {
                        min-height: 25px;
                        /* need to manually set font and font size */
                        font-family: sans-serif;
                        font-size: 14px;
                        box-sizing: border-box;
                        padding: 4px;
                        border: 1px solid;
                        overflow: hidden;
                        width: 100%;
                    }
                    textarea {
                        height: 100%;
                        position: absolute;
                        resize:none;
                        white-space: normal;
                    }
                    .textarea-size {
                        visibility: hidden;
                        white-space: pre-wrap;
                        word-wrap: break-word;
                        overflow-wrap: break-word;
                    }
                </style>
                <script>
                    var textContainer, textareaSize, input;
                    var autoSize = function () {
                        textareaSize.innerHTML = input.value + '\n';
                    };

                    document.addEventListener('DOMContentLoaded', function() {
                        textContainer = document.querySelector('.textarea-container');
                        textareaSize = textContainer.querySelector('.textarea-size');
                        input = textContainer.querySelector('textarea');
                        autoSize();
                        input.addEventListener('input', autoSize);
                    });
                </script>
            </div>
        </div>
        <div class="clearfix"> </div>
    </div>
    </div>
</form>
</div>
</body>
</html>