<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit_Profile</title>

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
<?php
session_start();
if(isset($_SESSION['username'])) {
    $myusername = $_SESSION['username'];
    $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
    mysqli_set_charset($con, 'utf8');
    $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$myusername'");
    $row=mysqli_fetch_array($result);
    $myemail = $row['email'];
    $mypassword = $row['password'];
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
<?php
if (isset($_POST['submit'])) {


        $con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
        mysqli_set_charset($con, 'utf8');

        $password = trim($_POST['password']);
        $gender = trim($_POST['gender']);
        $preference = trim($_POST['preference']);
        $location = trim($_POST['location']);
        $education = trim($_POST['education']);
        $occupation = trim($_POST['occupation']);
        $interest = $_POST['interest'];
        $birthyear = $_POST['year'];
        $birthmonth = $_POST['month'];
        $birthday = $_POST['day'];


            //Get the content of the image and then add slashes to it
        $q = "UPDATE users SET password='$password',gender = '$gender',preference='$preference',location='$location',education='$education',occupation='$occupation',interest='$interest',birthyear = '$birthyear',birthmonth = '$birthmonth',birthday = '$birthday'WHERE username = '$myusername'";
            $r = mysqli_query ($con, $q); // Run the query.
        if (!empty($_FILES["myimage"]["tmp_name"])) {
            $imagename=$_FILES["myimage"]["name"];
            $imagetmp=addslashes (file_get_contents($_FILES["myimage"]["tmp_name"]));
            $r2 = mysqli_query ($con, "UPDATE users SET photo = '$imagetmp' where username='$myusername'");
            if(!$r) {
                $error_message ="Please try again.";
            }
        }

            if((!isset($error_message))&&$r) {
                $success_message = "Congratulation! You have update your information successfully!";
                $error_message ="";
            } else {
                $error_message = "Please try again.";
            }
    $result = mysqli_query($con,"SELECT * FROM users WHERE username = '$myusername'");
    $row=mysqli_fetch_array($result);
    $myemail = $row['email'];
    $mypassword = $row['password'];
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

<div class="grid_3" >
    <div class="container" >
        <div class="breadcrumb1">
            <ul>
                <a href="index.php"><i class="fa fa-home home_1"></i></a>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Edit my profiler</li>
            </ul>
        </div>
        <div class="services">
            <div class="col-sm-6 login_left">
                <form action = "edit_profile.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <?php if(!empty($success_message)) { ?>
                        <div class="success-message"><?php if(isset($success_message)) echo $success_message; ?></div>

                            <?php } ?>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <?php if(!empty($error_message)) { ?>
                            <div class="error-message"><?php if(isset($error_message)) echo $error_message; ?></div>
                        <?php } ?>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label>Username : <?php echo "$myusername" ?></label>

                    </div>
                    <div class="form-group">
                        <label>Email : <?php echo "$myemail" ?></label>
                    </div>
                    <div class="form-group">
                        <label">Password <span>*</span></label>
                        <input type="password" id="edit-pass" name="password" value="<?php echo $mypassword ?>" size="60" maxlength="128" class="form-text required" required="required">
                    </div>

                    <div class="form-group">
                        <label class="col-sm-5 control-lable" for="sex">I am a : </label>
                        <div class="col-sm-7">
                            <?php if ($mygender=="Male") { ?>
                                <input type="radio" name='gender' value='Male'checked>    Male
                                <input type="radio" name='gender' value='Female' >    Female
                            <?php } ?>
                            <?php if ($mygender=="Female") {?>
                            <input type="radio" name='gender' value='Male'>    Male
                            <input type="radio" name='gender' value='Female'checked >    Female
                            <?php } ?>

                        </div>
                    </div>
                    <div class="clearfix"> </div>
                    <div class="form-group">

                        <label class="col-sm-5 control-lable" for="sex">Seeking for a : </label>
                        <div class="col-sm-7">
                            <?php if ($mypreference=="Male") { ?>
                            <input type="radio" name='preference' value='Male'checked>    Male
                            <input type="radio" name='preference' value='Female' >    Female
                            <?php } ?>
                            <?php if ($mypreference=="Female") { ?>
                                <input type="radio" name='preference' value='Male'>    Male
                                <input type="radio" name='preference' value='Female' checked>    Female
                            <?php } ?>
                        </div>
                    </div>
            <div class="clearfix"></div>
            <div class="form-group">
                <label for="edit-pass">Birthday <span class="form-required" title="This field is required.">*</span></label>
                <div class="age_grid">
                    <div class="col-sm-4 form_box">
                        <div class="select-block1">
                            <select name = "day" required="required">
                                <option value="">Date</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 form_box2">
                        <div class="select-block1">
                            <select name = "month" required="required">
                                <option value="">Month</option>
                                <option value="January">January</option>
                                <option value="February">February</option>
                                <option value="March">March</option>
                                <option value="April">April</option>
                                <option value="May">May</option>
                                <option value="June">June</option>
                                <option value="July">July</option>
                                <option value="August">August</option>
                                <option value="September">September</option>
                                <option value="October">October</option>
                                <option value="November">November</option>
                                <option value="December">December</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 form_box1">
                        <div class="select-block1">
                            <select name = "year" required="required">
                                <option value="">Year</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                                <option value="1999">1999</option>
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
                                <option value="2014">2014</option>
                                <option value="2015">2015</option>
                                <option value="2016">2016</option>
                                <option value="2017">2017</option>
                            </select>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
            <div><h3></h3> </div>


                    <div class="clearfix"> </div>
                    <div class="form-group">
                        <label for="edit-location">Location <span>*</span></label>
                        <input type="text" id="edit-location" name="location"  value="<?php echo $mylocation ?>"  size="60" maxlength="60" class="form-text required" required="required">
                    </div>
                    <div class="form-group">
                        <label for="edit-education">Education <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-education" name="education" value=<?php echo $myeducation ?> size="60" maxlength="60" class="form-text required"required="required">
                    </div>
                    <div class="form-group">
                        <label for="edit-occupation">Occupation <span class="form-required" title="This field is required.">*</span></label>
                        <input type="text" id="edit-occupation" name="occupation" value="<?php echo $myoccupation ?>" size="60" maxlength="60" class="form-text required"required="required">
                    </div>
                    <div class="form-group">
                        <div class="select-block1">
                            <label for="edit-interesr">Interest <span class="form-required" title="This field is required.">*</span></label>
                            <select name = interest required="required">
                                <?php if ($myinterest=="Sports") { ?>
                                <option value="">Select</option>
                                <option value="Sports" selected = selected>Sports</option>
                                <option value="Movie">Movie </option>
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Fashion">Fashion</option>
                                <?php  } ?>
                                <?php if ($myinterest=="Movie") { ?>
                                    <option value="">Select</option>
                                    <option value="Sports" >Sports</option>
                                    <option value="Movie" selected = selected>Movie </option>
                                    <option value="Science">Science</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Fashion">Fashion</option>
                                <?php  } ?>
                                <?php if ($myinterest=="Science") { ?>
                                    <option value="">Select</option>
                                    <option value="Sports" >Sports</option>
                                    <option value="Movie">Movie </option>
                                    <option value="Science" selected = selected>Science</option>
                                    <option value="Technology">Technology</option>
                                    <option value="Fashion">Fashion</option>
                                <?php  } ?>
                                <?php if ($myinterest=="Technology") { ?>
                                    <option value="">Select</option>
                                    <option value="Sports" >Sports</option>
                                    <option value="Movie">Movie </option>
                                    <option value="Science">Science</option>
                                    <option value="Technology" selected = selected>Technology</option>
                                    <option value="Fashion">Fashion</option>
                                <?php  } ?>
                                <?php if ($myinterest=="Fashion") { ?>
                                    <option value="">Select</option>
                                    <option value="Sports" >Sports</option>
                                    <option value="Movie">Movie </option>
                                    <option value="Science">Science</option>
                                    <option value="Technology" >Technology</option>
                                    <option value="Fashion" selected = selected>Fashion</option>
                                <?php  } ?>
                            </select>
                        </div>
                    </div>
                    <div>
                        <img src="imageView.php" width="40%" height="40%"/>
                    </div>
                    <div class="form-group">
                        <label for="InputFile">Upload your photo<span class="form-required" title="This field is required.">*</span></label>
                        <input type="file" name="myimage">
                    </div>
                    <div class='form-group'>
                        <button class="btn btn-lg btn-danger btn-block" type="submit", name="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
