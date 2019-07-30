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
						<li><a href="index.php" title="">Logout</a></li>
				</nav>		
   		</div> <!-- /top-bar --> 
   		
   	</div> <!-- /row --> 		
   </header> <!-- /header -->

   <!-- Style Demo
   ================================================== -->
 <section id="styles">

   	<div class="row section-intro">

   		<div class="col-twelve">

   			<h1>Bill Payment</h1>
   			 <form action="" method="POST">
			        	<div>
			         	<label for="sampleInput">Customer ID</label>
			         	<input class="full-width" type="text" placeholder="eg: nisha123" id="sampleInput" name="cid">
			         </div>
			         <div>
			         	<label for="sampleInput">Service Number</label>
			         	<input class="full-width" type="text" placeholder="eg: 444" id="sampleInput" name="sno">
			         </div>
			         <div>
			         	<label for="sampleInput">Month</label>
			         	<input class="full-width" type="text" placeholder="eg: june" id="sampleInput" name="month">
			         </div>
			          <div>
			         	<label for="sampleRecipientInput">Pay Via</label>
			         	<div class="ss-custom-select">
			         		<select class="full-width" id="sampleRecipientInput" name="payvia">
				           		<option value="Debit Card">Debit Card</option>
				           		<option value="Credit Card">Credit Card</option>
				           		<option value="Bank">Bank</option>
				         	</select>
			         	</div>			         	
			         </div>
  <input class="button-primary" type="submit" value="Payment" name="submit">
 <?php
  if(isset($_POST['submit']))
  {
    @$cid=$_POST['cid'];
    @$sno=$_POST['sno'];
    @$month=$_POST['month'];
    @$payment=$_POST['payvia'];
    @$status=NULL;
    if(!empty($cid)&&!empty($sno)&&!empty($month))
    {
      @$query="INSERT into payment values('$cid','$sno','$month','$payvia','$status')";
      @$query_pro=mysqli_query($con,$query);
      if($query_pro)
      {
        echo "<script>alert('Thanku! Payment Done!!')</script>";
        @$update_query="UPDATE caluculatebill set status='Paid' where cname='$user'";
        @$update_query_pro=mysqli_query($con,$update_query);
        if($update_query_pro)
        {
          echo  "<script>window.open('userpage.php','_self')</script>";
        }
        else
        {
          header("Location:payment.php");
        }
        echo  "<script>window.open('userpage.php','_self')</script>";
      }
      else
      {
        header("Location:payment.php");
      }
    }
    else
    {
      echo "<script>alert('All field are Required!')</script>";
      echo  "<script>window.open('payment.php','_self')</script>";
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