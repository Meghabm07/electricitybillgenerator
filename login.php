<?php
include("db.php");
if(isset($_POST['login'])){
  $email = $_POST['username'];
  $password = $_POST['userpassword'];
  if(!empty($email)&&!empty($password)){
    $result="select * from uregister where uname='$email' and upw='$password'";
    $result_run=mysqli_query($con,$result);
    if(!$result_run)
    echo "Error in query.. <br />";
    else {
      while($row=mysqli_fetch_array($result_run,MYSQLI_ASSOC))
      {
           $email_database=$row['uname'];
        $password_hash_database=$row['upw'];
     
      }
      //echo $uid_database;
      if(@($email==$email_database)&&($password==$password_hash_database)){
        session_start();
        $_SESSION['session_user']=$email;
        //Redirect Browser
        header("Location: userpage.php");
      } else {
        echo "<script>alert('Please Enter a Correct Username and Password!')</script>";
        echo  "<script>window.open('login.php','_self')</script>";
      }
    }
  }else{
    echo "<script>alert('All Field are required!')</script>";
    echo  "<script>window.open('index.php','_self')</script>";
  }
}
if(isset($_POST['login1'])){
  $email = $_POST['adminname'];
  $password = $_POST['adminpassword'];
  if(!empty($email)&&!empty($password)){
    $result="select * from aregister where aname='$email' and apw='$password'";
    $result_run=mysqli_query($con,$result);
    if(!$result_run)
    echo "Error in query.. <br />";
    else {
      while($row=mysqli_fetch_array($result_run,MYSQLI_ASSOC))
      {
      	   $email_database=$row['aname'];
        $password_hash_database=$row['apw'];
     
      }
      //echo $uid_database;
      if(@($email==$email_database)&&($password==$password_hash_database)){
         session_start();
        $_SESSION['session_user']=$email;
        //Redirect Browser
        header("Location: adminpage.php");
      } else {
        echo "<script>alert('Please Enter a Correct Username and Password!')</script>";
        echo  "<script>window.open('login.php','_self')</script>";
      }
    }
  }else{
    echo "<script>alert('All Field are required!')</script>";
    echo  "<script>window.open('index.php','_self')</script>";
  }
}
@mysqli_free_result($result);
@mysqli_close($db);
?>
<!DOCTYPE html>
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Style Demo - Kards</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" ></script>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">

   <style type="text/css" media="screen">

   	#styles { 
   		background: white;
   		padding-top: 12rem;
   		padding-bottom: 12rem;
   	}
   	#styles .row {
   		max-width: 1024px;
     	}
     	#styles .section-intro {
   		max-width: 800px;
     	}
      	
   </style>       

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>   	
   	<div class="row">

   		<div class="top-bar">
   			<a class="menu-toggle" href="#"><span>Menu</span></a>

	   		<div class="logo">
		         <a href="index.html">KARDS</a>
		      </div>		      

		   	
		   	<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li><a href="index.php" title="">Home</a></li>
						<li><a href="login.php" title="">Login</a></li>
						<li><a href="register.php" title="">Register</a></li>				
						<li><a href="contact.php" title="">Contact</a></li>		
					</ul>
				</nav>		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

   <!-- Style Demo
   ================================================== -->
   <section id="styles">

   	<div class="container">
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">User Login</a>
        
							</div>
							<div class="col-xs-6">
								<a href="#" id="register-form-link">Admin Login</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form" action="" method="post" role="form" style="display: block;margin-top: -30px; ">	
                             <p style="text-align: center;margin-bottom: -8px;">USER</p>
                                <div>
			         	                  <label for="sampleInput">User Name</label>
			                            	<input class="full-width" type="text" placeholder="eg: nisha" id="sampleInput" name="username">
			                            </div>
			                            <div>
			         	                  <label for="sampleInput">Password</label>
			         	                   <input class="full-width" type="password" id="sampleInput" name="userpassword">
			                            </div>
			                            <label class="add-bottom">
			           	                  <input type="checkbox" value="checked">			            
			           	                  <span class="label-text">I Agree terms and Condition</span>
			        	                </label>
			        	                <br>
                			        	<input class="button-primary" type="submit" value="login" name="login" style="margin-left: -70px;">
                			        	<br>
                			        	<span class="label-text"><a href="register.php">Not register? Register Now.. </a></span>
						        </form>
						       <form id="register-form" action="" method="post" role="form" style="display: none;margin-top: -30px;  ">
			                        <p style="text-align: center;margin-bottom: -8px;">ADMIN</p>
                                <div>
			         	                  <label for="sampleInput">User Name</label>
			                            	<input class="full-width" type="text" placeholder="eg: nisha" id="sampleInput" name="adminname">
			                            </div>
			                            <div>
			         	                  <label for="sampleInput">Password</label>
			         	                   <input class="full-width" type="password" id="sampleInput" name="adminpassword">
			                            </div>
			                            <label class="add-bottom">
			           	                  <input type="checkbox" value="checked">			            
			           	                  <span class="label-text">I Agree terms and Condition</span>
			        	                </label>
			        	                <br>
                			        	<input class="button-primary" type="submit" value="login" name="login1"  style="margin-left: -70px;">
                			        	<br>
                			        	<span class="label-text"><a href="register.php">Not register? Register Now.. </a></span>
						        </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

   </section> <!--styles -->	


   <footer>
     	<div class="row">

     		<div class="col-six tab-full pull-right social">

     			<ul class="footer-social">        
			      <li><a href="#"><i class="fa fa-facebook"></i></a></li>
			      <li><a href="#"><i class="fa fa-behance"></i></a></li>
			      <li><a href="#"><i class="fa fa-twitter"></i></a></li>
			      <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
			      <li><a href="#"><i class="fa fa-instagram"></i></a></li>
			   </ul> 
	      		
	      </div>

      	<div class="col-six tab-full">
	      	<div class="copyright">
		        	<span>© Copyright Kards 2016.</span> 
		        	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>	         	
		         </div>		                  
	      	</div>

	      	<div id="go-top">
		         <a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
		      </div>

      	</div> <!-- /row -->     	
   </footer>    

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
   <script type="text/javascript">
   	$(function() {

    $('#login-form-link').click(function(e) {
		$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
   </script>

</body>

</html>