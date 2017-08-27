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
                            <li><a href="recent_view.php">Recently view</a></li>
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


    
<div class="banner">
  <div class="container">
    <div class="banner_info">
      <h3>Let's play A Match Game</h3>
      <h3>And Find Your Mr & Ms Right</h3>
        <div class="container" >
            <h3></h3>
            <p><font size = "5.5" color="#f0ffff"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Click the <span class="glyphicon glyphicon-heart" aria-hidden="true"></span> button when you like someone.</font></p>
            <h5></h5>
            <p><font size = "5.5" color="#f0ffff"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> When someone you liked likes you, YOU TWO MATCHES!</font></p>
            <h5></h5>
            <p><font size = "5.5" color="#f0ffff"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> Congratulations!  The convesation can start!</font></p>
            <h3></h3>
        </div>

       <div class = "container">
           <?php if(!isset($_SESSION['username'])) { ?>

        <a href="register.php" class="btn btn-danger"><font size = "5.5" color="#f0ffff">Join Us and Get Started!</font></a>
           <h2></h2>
           <p>Already be a member? Click <a href="login.php"><u>here</u></a></p>
           <?php } ?>

        </div>

        <div>
        </div>

      </div>
</div>

    <?php

    if (isset($_POST["search"])) {

        $gender = $_POST['gender'];
        $preference = $_POST['preference'];
        $location = $_POST['location'];
        $interest = $_POST['interest'];
        $low_age = $_POST['low_age'];
        $high_age = $_POST['high_age'];
        header("location:index.php");
    }
    ?>



      <div class="profile_search">
  	<div class="container wrap_1">
	  <form action="search.php">
	  	<div class="search_top">
		 <div class="inline-block">
		  <label class="gender_1">I am :</label>
			<div class="age_box1" style="max-width: 100%; display: inline-block;">
				<select name = "gender" required="required">
					<option value="">* Gender</option>
					<option value="Male">Man</option>
                    <option value="Female">Woman</option>
				</select>
		   </div>

	    </div>
            <div class="inline-block">
                <label class="gender_1">looking for a :</label>
                <div class="age_box1" style="max-width: 100%; display: inline-block;">
                    <select name = "preference" required="required">
                        <option value=""> * Preference</option>
                        <option value="Male">Man</option>
                        <option value="Female">Woman</option>
                    </select>
                </div>

            </div>
        <div class="inline-block">
		  <label class="gender_1">Located In :</label>
			<div class="age_box1" style="max-width: 100%; display: inline-block;">
				<select name="location">
					<option value="">* Select State</option>
					<option value="Washington">Washington</option>
                    <option value="Pennsylvania">Pennsylvania</option>
					<option value="Texas">Texas</option>
					<option value="Georgia">Georgia</option>
					<option value="Virginia">Virginia</option>
					<option value="Colorado">Colorado</option>
               </select>
          </div>
        </div>
        <div class="inline-block">
		  <label class="gender_1">Interested In :</label>
			<div class="age_box1" style="max-width: 100%; display: inline-block;">
                <select name = "interest" required="required">
                    <option value="">* Select Interest</option>
                    <option value="Sports">Sports</option>
                    <option value="Movie">Movie</option>
                    <option value="Science">Science</option>
                    <option value="Technology">Technology</option>
                    <option value="Arts">Arts</option>
                    <option value="Fashion">Fashion</option>
                </select>
          </div>
       </div>
     </div>
	 <div class="inline-block">
	   <div class="age_box2" style="max-width: 220px;">
	   	<label class="gender_1">Age :</label>
	    <input class="transparent" name="low_age" placeholder="From:" style="width: 30%;" type="text" value="">&nbsp;-&nbsp;<input class="transparent" name="high_age" placeholder="To:" style="width: 30%;" type="text" value="">
	   </div>
	 </div>
		<div class="submit inline-block">

		   <input id="submit-btn" class="hvr-wobble-vertical" type="submit" name= "search" value="Search">

		</div>
     </form>

    </div>
  </div> 
    </div>

<?php
$con = mysqli_connect ('localhost','root','','datingwebsite') OR die ('Could not connect to MySQL: ' . mysqli_connect_error() );
mysqli_set_charset($con, 'utf8');
if (!isset($_SESSION['username'])) {
    $sqlran = mysqli_query($con,"SELECT * FROM users ORDER BY RAND() LIMIT 5 ");

}

if (isset($_SESSION['username'])) {
    $sqlran = mysqli_query($con,"SELECT * FROM users ORDER BY RAND() LIMIT 5 ");
    $myusername = $_SESSION['username'];
    $rec = array();
    $matchusersql =  mysqli_query($con,"SELECT * FROM matchlist WHERE user1='$myusername'");

    while ($matchuser = mysqli_fetch_array($matchusersql)) {
        $matchusername = $matchuser['user2'];
       // echo $matchusername;//A(matchusername) match with me
        $matchwithmatchsql = mysqli_query($con,"SELECT * FROM matchlist WHERE user2='$matchusername'");//B(matchwithmatchname) match with A
        while($matchwithmatch = mysqli_fetch_array($matchwithmatchsql)) {
            $matchwithmatchname = $matchwithmatch['user1'];
            if ($matchwithmatchname!= $_SESSION['username']) {
                //echo "$matchwithmatchname";
                $resultsql = mysqli_query($con,"SELECT * FROM matchlist WHERE user1='$matchwithmatchname'");//C match with B
                while ( $result = mysqli_fetch_array($resultsql)) {
                    $resultname = $result['user2'];
                    if ($resultname!=$matchusername) {
                        array_push($rec,$resultname);
                    }

                }

            }

        }

        $matchmatch = mysqli_query($con,"SELECT * FROM matchlist WHERE user2='$matchusername'");
    }

}
?>



<div class="grid_1">
      <div class="container">
      	<h1>Recommend Users</h1>
       	<div class="heart-divider">
			<span class="grey-line"></span>
			<i class="fa fa-heart pink-heart"></i>
			<i class="fa fa-heart grey-heart"></i>
			<span class="grey-line"></span>
        </div>
        <ul id="flexiselDemo3">
            <?php $number = 0;
            if (!isset($_SESSION['username'])) {
                while (($number <= 4) && ($recommendation = mysqli_fetch_array($sqlran))) { ?>
                <li><div class="col_1"><a href="view_profile.php?user=<?php echo $recommendation['username']; ?>&like=0&delete=0">
                            <img src="imageViewOther.php?user=<?php echo $recommendation['username']; ?>"  alt="" class="hover-animation image-zoom-in img-responsive"/>
                            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                                <div class="center-middle">About </div>
                            </div>
                            <h3><span class="m_3"><?php echo $recommendation['username']?></span><br><?php echo date("Y")-$recommendation['birthyear'] ?>, <?php echo $recommendation['gender'] ?>, <?php echo $recommendation['location'] ?><br> <?php echo $recommendation['occupation'] ?></h3></a></div>
                </li>
                <?php $number = $number + 1;
                }
            }
            if (isset($_SESSION['username'])) {
                $temp = array();
                while (($number <= 4) && count($rec)>0 ) {
                $recommendationname = array_pop($rec);
                array_push($temp,$recommendationname);
                $recommendationsql = mysqli_query($con,"SELECT * FROM users WHERE username='$recommendationname'");
                $recommendation = mysqli_fetch_array($recommendationsql);
                ?>

                <li><div class="col_1"><a href="view_profile.php?user=<?php echo $recommendation['username']; ?>&like=0&delete=0">
                            <img src="imageViewOther.php?user=<?php echo $recommendation['username']; ?>"  alt="" class="hover-animation image-zoom-in img-responsive"/>
                            <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                                <div class="center-middle">About </div>
                            </div>
                            <h3><span class="m_3"><?php echo $recommendation['username']?></span><br><?php echo date("Y")-$recommendation['birthyear'] ?>, <?php echo $recommendation['gender'] ?>, <?php echo $recommendation['location'] ?><br> <?php echo $recommendation['occupation'] ?></h3></a></div>
                </li>
                <?php $number = $number + 1; }
            if ($number<=4) {
                while (($number <= 4) && ($recommendation = mysqli_fetch_array($sqlran))) {
                    if (!in_array($recommendation['username'],$temp) && ($recommendation['username']!=$_SESSION['username']))     {?>
                    <li><div class="col_1"><a href="view_profile.php?user=<?php echo $recommendation['username']; ?>&like=0&delete=0">
                                <img src="imageViewOther.php?user=<?php echo $recommendation['username']; ?>"  alt="" class="hover-animation image-zoom-in img-responsive"/>
                                <div class="layer m_1 hidden-link hover-animation delay1 fade-in">
                                    <div class="center-middle">About </div>
                                </div>
                                <h3><span class="m_3"><?php echo $recommendation['username']?></span><br><?php echo date("Y")-$recommendation['birthyear'] ?>, <?php echo $recommendation['gender'] ?>, <?php echo $recommendation['location'] ?><br> <?php echo $recommendation['occupation'] ?></h3></a></div>
                    </li>
                    <?php $number = $number + 1;
                } }
            }

            }
            ?>

	    </ul>
	    <script type="text/javascript">
		 $(window).load(function() {
			$("#flexiselDemo3").flexisel({
				visibleItems: 5,
				animationSpeed: 1000,
				autoPlay:false,
				autoPlaySpeed: 3000,    		
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
		    	responsiveBreakpoints: { 
		    		portrait: { 
		    			changePoint:480,
		    			visibleItems: 1
		    		}, 
		    		landscape: { 
		    			changePoint:640,
		    			visibleItems: 2
		    		},
		    		tablet: { 
		    			changePoint:768,
		    			visibleItems: 3
		    		}
		    	}
		    });
		    
		});
	   </script>
	   <script type="text/javascript" src="js/jquery.flexisel.js"></script>
    </div>
</div>






</body>
</html>	