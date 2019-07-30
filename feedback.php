<?php
include("db.php");
session_start();
$user=$_SESSION["session_user"];
if(!isset($user)){
  header("Location: login.php");
}
else
{
 ?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
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
						<li><a href="userpage.php" title="">View Bill</a></li>
						<li><a href="payment.php" title="">Make Payment</a></li>
						<li><a href="feedback.php" title="">Feedback</a></li>					
						<li><a href="logout.php" title="">Logout</a></li>				
					</ul>
				</nav>		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

   <!-- Style Demo
   ================================================== -->
 <section id="styles">

   	<div class="row section-intro">

   		<div class="col-twelve">
        <h1><?php echo $user; ?> Please Give Us Your Feedback </h1>
   			<p>We are always seeking to improve our website, the data we publish and the service we provide to you, and we welcome your feedback as an important part of this process. We will review your feedback regularly and will publish summary comments periodically. If you would like us to respond to your feedback, please include your name and email address.</p>
   			 <form action="" method="POST">
			        	<div>
			         	<label for="sampleInput">Customer ID</label>
			         	<input class="full-width" type="text" placeholder="eg: nisha123" id="sampleInput" name="user" value="<?php echo $user  ?>">
			         </div>
			         <div>
			         	<label for="exampleMessage">Feedback </label>
			       	    <textarea class="full-width" placeholder="feedback" id="exampleMessage" name="feedback"></textarea>
			         </div>
			       
			        	<input class="button-primary" type="submit" value="Submit" name="submit">
                <?php
                  if(isset($_POST['submit']))
  {
   @$user=$_POST['user'];
   @$feedback=$_POST['feedback'];
   if(!empty($user)&&!empty($feedback))
   {
      @$query="INSERT into feedback values ('$user','$feedback')";
      @$query_pro=mysqli_query($con,$query);
      echo "<script>alert('successfull!')</script>";
       header('Location:userpage.php'); 
   }
   else{
     echo "<script>alert('All field are Required!')</script>";
     header('Location:feedback.php');  
   }
  }


                ?>

			      </form> 
   		</div>
     	</div> <!-- /row -->

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

</body>

</html>
<?php
}
?>