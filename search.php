<!DOCTYPE HTML>
<html lang="en">
<?php
session_start();
?>
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
<div ><h1></h1></div>
<div ><h1></h1></div>
<div ><h1></h1></div>
<div ><h1></h1></div>
<div>
  	<div class="container">
   		<div class="breadcrumb1">
     	<ul>
        	<a href="index.php"><i class="fa fa-home home_1"></i></a>
        	<span class="divider">&nbsp;|&nbsp;</span>
        	<li class="current-page">Regular Search</li>
     	</ul>
   		</div>
	</div>


	 <div class="profile_search1">
         <div class="container">
  		<form action="search.php" method="post">
			<div class="col-sm-4">
					<label class="col-sm-4 control-lable1"> I am a : </label>
					<div class="col-sm-8">
						<div class="select-block1">
							<select name="gender" required="required">
								<option value="">Select Gender</option>
								<option value="Male">Man</option>
								<option value="Female">Woman</option>
							</select>
						</div>
					</div>
			</div>
			<div class="col-sm-4">
					<label class="col-sm-4 control-lable1"> Looking For a : </label>
					<div class="col-sm-8">
						<div class="select-block1">
							<select name="preference">
								<option value="">Select Preference</option>
								<option value="Male">Man</option>
								<option value="Female">Woman</option>
							</select>
						</div>
					</div>
			</div>
			<div class="col-sm-4">
				<label class="col-sm-4 control-lable1" >State : </label>
				<div class="col-sm-8">
      				<div class="select-block1">
						<select name="location">
						<option value="">Select State</option>
						<option value="Washington">Washington</option>
						<option value="Texas">Texas</option>
                        <option value="Pennsylvania">Pennsylvania</option>
						<option value="Georgia">Georgia</option>
						<option value="Virginia">Virginia</option>
						<option value="Colorado">Colorado</option>
						</select>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
			<div><h3></h3></div>
			<div class="col-sm-4">
				  <label class="col-sm-4 control-lable1"> Interest : </label>
				  <div class="col-sm-8">
					  <div class="select-block1">
						  <select name="interest">
							  <option value="">Select Interest</option>
							  <option value="Sports">Sports</option>
							  <option value="Movie">Movie</option>
							  <option value="Science">Science</option>
							  <option value="Technology">Technology</option>
							  <option value="Fashion">Fashion</option>
						  </select>
					  </div>
				  </div>
			</div>
			<div class="col-sm-4">
				<label class="col-sm-4 control-lable1">Age : </label>
				<div class="col-sm-4 ">
					<input class="form-control has-dark-background" type="text" name="low_age"  placeholder="min" type="text" required="">
				</div>

				<div class="col-sm-4 ">
					<input class="form-control has-dark-background" type="text" name="high_age"  placeholder="max" type="text" required="">
				</div>

			</div>
            <div class ="col-sm-1">

            </div>
			<div class="col-sm-3",align="right">

                <div align="right">
					<button class="btn btn-lg btn-danger btn-block" type="submit", name="submit">Search</button>
				</div>

			</div>
			<div class="clearfix"> </div>

		</form>
	 </div>

     </div>
</div>
<div class="container">
    <div class="breadcrumb1">
        <ul>
            <a href="index.php"><i class="fa fa-home home_1"></i></a>
            <span class="divider">&nbsp;|&nbsp;</span>
            <li class="current-page">Advanced Search</li>
        </ul>
    </div>
</div>

<div class="advance_search">
    <div class="container">
        <form action="search.php" method="post">
            <div>
                <div class="col-sm-6 form-group">
                    <label class="col-sm-6 control-lable1"> I am a : </label>
                    <div class="col-sm-6">
                        <div class="select-block1">
                            <select name="gender1" required="required">
                                <option value="">Select Gender</option>
                                <option value="Male">Man</option>
                                <option value="Female">Woman</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div><h1></h1></div>
                <div class="col-sm-6 form-group">
                    <label class="col-sm-6 control-lable1"> Looking For a : </label>
                    <div class="col-sm-6">
                        <div class="select-block1">
                            <select name="preference1">
                                <option value="">Select Preference</option>
                                <option value="Male">Man</option>
                                <option value="Female">Woman</option>
                            </select>
                        </div>
                    </div>
                </div>



            </div>

            <div class="col-sm-9">
                <input type="text" name = "sentence" style="width: 100%" required="required">
                <p class="help-block">Tell us who you are looking for in a sentence.</p>
            </div>
            <div class = "col-sm-3">
                <button class="btn btn-lg btn-danger btn-block" type="submit", name="submit2">Search</button>
            </div>
        </form>
    </div>
</div>


<?php if(isset($_POST["submit2"])) {
    $gender1 = $_POST['gender1'];
    $preference1 = $_POST['preference1'];
    $sent = $_REQUEST['sentence'];
    $sentence = strtolower($sent);
    $arr = preg_split("/[\s,.]+/", $sentence);
    $interestindex = array("Sports", "Sports", "Sports", "Sports", "Movie", "Movie", "Movie", "Movie", "Science", "Science", "technology", "Art", "Art", "fashion");
    $interestarr = array("athlete", "sportsman", "sports", "sport", "movie", "movies", "film", "films", "science", "scientist", "technology", "art", "artist", "fashion");
    $interestselect1 = array_intersect($arr, $interestarr);
    if (count($interestselect1) > 0) {
        for ($i = 1; $i < count($interestarr); $i++) {
            if (in_array($interestarr[$i], $arr)) {
                $interestselect = $interestindex[$i];
            }
        }
    } else {
        $interestselect = "*";
    }
   //print_r($interestselect);

    $file = 'states.csv';
    $content = file_get_contents($file);

    $file2 = 'states2.csv';
    $content2 = file_get_contents($file2);

    $locationarr = explode(",", $content);
    $locationarr2 = explode(",", $content2);
    $locationselect = "*";
    //print_r($locationarr);
    //print_r($locationarr2);
    for ($i = 1; $i < count($locationarr); $i++) {
        if (in_array($locationarr[$i], $arr)) {
            $str = $locationarr[$i];
            $locationselect = ucfirst($str);
        }
    }
    for ($i = 1; $i < count($locationarr2); $i++) {
        if (in_array($locationarr2[$i], $arr)) {
            $str = $locationarr[$i];
            $locationselect = ucfirst($str);
        }
    }
    //print_r($locationselect);



}

?>


<?php if (isset($_POST["submit"]) || isset($_REQUEST["search"])) { ;?>
<div class="grid_3">
    <div class="container">
        <div class="breadcrumb1">
            <ul>
                <span class="glyphicon glyphicon-heart" aria-hidden="true" color=#b43346 "></span>
                <span class="divider">&nbsp;|&nbsp;</span>
                <li class="current-page">Search result</li>
                <?php if (!isset($_SESSION['username'])) { ?>
                Want to see personal details? <a href="register.php">Register and join us</a>
                <?php } ?>
            </ul>

        </div>

    </div>

    <div class="grid_4" >
        <div class="container">

        <?php
    $con = new mysqli ('localhost','root','','datingwebsite')OR die ('Could not connect to MySQL: ' . $conn->connect_error);
	$preference= $_REQUEST['gender'];
	$gender=$_REQUEST['preference'];
	$location=$_REQUEST['location'];
	$interest=$_REQUEST['interest'];
	$min_age=$_REQUEST['low_age'];
	$max_age=$_REQUEST['high_age'];
	$year_now = date("Y");
	$sql="SELECT * FROM users WHERE
	gender='$gender' AND preference='$preference' AND location='$location' AND interest='$interest' AND birthyear BETWEEN ( '$year_now'-'$max_age') AND ('$year_now'-'$min_age')";
	$result=$con->query($sql);
	?>
	<form action="view_profile.php" >
		<?php if($result->num_rows > 0) { ?>
		<?php while($row=mysqli_fetch_array($result)) {
		    if (!isset($_SESSION['username'])) { ?>
                <div class="col-sm-6">
                    <ul class="profile_item">
                        <div class="col-sm-6" align="center">
                            <img src="imageViewOther.php?user=<?php echo $row['username'];?>" width="40%" height="40%"/>
                        </div>

                        <li class="profile_item-desc">
                            <p>Name: <?php echo $row['username']?></>
                            <p>Gender: <?php echo $row['gender']?></>
                            <p>Age : <?php echo $year_now - $row['birthyear'] ?></p>
                            <p>Location: <?php echo $row['location']?></>
                            <p>Interest: <?php echo $row['interest']?></>
                            <?php if (isset($_SESSION['username'])) { ?>
                                <p><a href="view_profile.php?user=<?php echo $row['username'];?>&delete=0&like=0">View file</a></p>
                            <?php } ?>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
            <?php } else {
		    if ($row['username']!=$_SESSION['username']) {
		    ?>
		<div class="col-sm-6">
			<ul class="profile_item">
                <div class="col-sm-6" align="center">
                    <img src="imageViewOther.php?user=<?php echo $row['username'];?>" width="40%" height="40%"/>
                </div>

					<li class="profile_item-desc">
						<p>Name: <?php echo $row['username']?></>
						<p>Gender: <?php echo $row['gender']?></>
                        <p>Age : <?php echo $year_now - $row['birthyear'] ?></p>
						<p>Location: <?php echo $row['location']?></>
						<p>Interest: <?php echo $row['interest']?></>
                        <?php if (isset($_SESSION['username'])) { ?>
                            <p><a href="view_profile.php?user=<?php echo $row['username'];?>&delete=0&like=0">View file</a></p>
                        <?php } ?>
				</li>
				<div class="clearfix"> </div>

			</ul>
		</div>
		<?php } } }?>

		<?php
            mysqli_free_result($result);
        } else {
            echo "<p>No Match Found.</p>";
		}
		$con->close();
		?>
	</form>
    </div>
</div>
</div>
<?php } ?>

<?php if (isset($_POST["submit2"]) ) { ;?>
    <div class="grid_3">
        <div class="container">
            <div class="breadcrumb1">
                <ul>
                    <span class="glyphicon glyphicon-heart" aria-hidden="true" color=#b43346 "></span>
                    <span class="divider">&nbsp;|&nbsp;</span>
                    <li class="current-page">Search result</li>
                    <?php if (!isset($_SESSION['username'])) { ?>
                        Want to see personal details? <a href="register.php">Register and join us</a>
                    <?php } ?>
                </ul>

            </div>

        </div>

        <div class="grid_4" >
            <div class="container">

                <?php
                $con = new mysqli ('localhost','root','','datingwebsite')OR die ('Could not connect to MySQL: ' . $conn->connect_error);
                $sql="SELECT * FROM users WHERE gender='$preference1' AND preference='$gender1' AND location='$locationselect' AND interest='$interestselect' ";
                $result=$con->query($sql);
                ?>
                <form action="view_profile.php" >
                    <?php if($result->num_rows > 0) { ?>
                        <?php while($row=mysqli_fetch_array($result)) {
                            if (!isset($_SESSION['username'])) { ?>
                                <div class="col-sm-6">
                                    <ul class="profile_item">
                                        <div class="col-sm-6" align="center">
                                            <img src="imageViewOther.php?user=<?php echo $row['username'];?>" width="40%" height="40%"/>
                                        </div>

                                        <li class="profile_item-desc">
                                            <p>Name: <?php echo $row['username']?></>
                                            <p>Gender: <?php echo $row['gender']?></>
                                            <p>Age : <?php echo $year_now - $row['birthyear'] ?></p>
                                            <p>Location: <?php echo $row['location']?></>
                                            <p>Interest: <?php echo $row['interest']?></>
                                            <?php if (isset($_SESSION['username'])) { ?>
                                                <p><a href="view_profile.php?user=<?php echo $row['username'];?>&delete=0&like=0">View file</a></p>
                                            <?php } ?>
                                        </li>
                                        <div class="clearfix"> </div>
                                    </ul>
                                </div>
                            <?php } else {
                                if ($row['username']!=$_SESSION['username']) {
                                    ?>
                                    <div class="col-sm-6">
                                        <ul class="profile_item">
                                            <div class="col-sm-6" align="center">
                                                <img src="imageViewOther.php?user=<?php echo $row['username'];?>" width="40%" height="40%"/>
                                            </div>

                                            <li class="profile_item-desc">
                                                <p>Name: <?php echo $row['username']?></>
                                                <p>Gender: <?php echo $row['gender']?></>
                                                <p>Age : <?php echo date("Y") - $row['birthyear'] ?></p>
                                                <p>Location: <?php echo $row['location']?></>
                                                <p>Interest: <?php echo $row['interest']?></>
                                                <?php if (isset($_SESSION['username'])) { ?>
                                                    <p><a href="view_profile.php?user=<?php echo $row['username'];?>&delete=0&like=0">View file</a></p>
                                                <?php } ?>
                                            </li>
                                            <div class="clearfix"> </div>

                                        </ul>
                                    </div>
                                <?php } } }?>

                        <?php
                        mysqli_free_result($result);
                    } else {
                        echo "<p>No Match Found.</p>";
                    }
                    $con->close();
                    ?>
                </form>
            </div>
        </div>
    </div>
<?php } ?>





</body>
</html>
