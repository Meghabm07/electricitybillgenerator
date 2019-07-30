<?php
include("db.php");

if(isset($_POST['submit'])){
	@$name=$_POST['name'];
	@$email=$_POST['email'];
	@$cno=$_POST['cno'];
	@$add=$_POST['add'];
	@$role=$_POST['role'];
	@$password=$_POST['password'];
if(!empty($name)&&!empty($cno)&&!empty($email)){
    if(@($role=="Admin")){
       @$query="INSERT into aregister (aname,aemail,acno,aadd,apw) values('$name','$email','$cno','$add','$password')";
      @$query_pro=mysqli_query($con,$query);
      if($query_pro){
        echo "<script>alert('Thanku! you are successfully Registerd!')</script>";
        echo  "<script>window.open('login.php','_self')</script>";
      }else{
        /*  header("Location:home.php?q=".$email);*/
      }
      }else{
      @$query="INSERT into uregister (uname,uemail,ucno,uadd,upw) values('$name','$email','$cno','$add','$password')";
      @$query_pro=mysqli_query($con,$query);
      if($query_pro){
        echo "<script>alert('Thanku! you are successfully Registerd!')</script>";
        echo  "<script>window.open('login.php','_self')</script>";
      }else{
        /*  header("Location:home.php?q=".$email);*/
      }
   }
  }else{
    echo "<script>alert('All field are Required!')</script>";
    echo  "<script>window.open('register.php','_self')</script>";
  }
	}
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

   	<div class="row section-intro">

   		<div class="col-twelve">

   			<h1>Register Here</h1>
   			 <form action="" method="POST">
			        	<div>
			         	<label for="sampleInput">Full Name</label>
			         	<input class="full-width" type="text" placeholder="eg: nisha" id="sampleInput" name="name">
			         </div>
			         <div>
			         	<label for="sampleInput">E-Mail</label>
			         	<input class="full-width" type="email" placeholder="eg: nisha@gmail.com" id="sampleInput" name="email">
			         </div>
			         <div>
			         	<label for="sampleInput">Contact Number</label>
			         	<input class="full-width" type="text" placeholder="eg: 1234569874" id="sampleInput" name="cno">
			         </div>
			         <div>
			         	<label for="exampleMessage">Address</label>
			       	    <textarea class="full-width" placeholder="Address" id="exampleMessage" name="add"></textarea>
			         </div>
			          <div>
			         	<label for="sampleRecipientInput">Role</label>
			         	<div class="ss-custom-select">
			         		<select class="full-width" id="sampleRecipientInput" name="role">
				           		<option value="Admin">Admin</option>
				           		<option value="2">User</option>
				         	</select>
			         	</div>			         	
			         </div>
			         <div>
			         	<label for="sampleInput">Password</label>
			         	<input class="full-width" type="Password"  name="pw">
			         </div>
			         <div>
			         	<label for="sampleInput">Confirm Password</label>
			         	<input class="full-width" type="Password" name="password">
			         </div>
			        	<label class="add-bottom">
			           	<input type="checkbox" value="checked">			            
			           	<span class="label-text">I Agree terms and Condition</span>
			        	</label>
			       
			        	<input class="button-primary" type="submit" value="Submit" name="submit">

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