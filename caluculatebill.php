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
						<li><a href="userpage.php" title="">View Customer</a></li>
						<li><a href="caluculatebill.php" title="">Caluculate Bill</a></li>
						<li><a href="update.php" title="">Update</a></li>					
						<li><a href="viewfeedback.php" title="">View Feedback</a></li>
						<li><a href="index.php" title="">Logout</a></li>		
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
          <h2>Welcome <?php echo $user; ?></h2>
        <h1>Electricity Bill Generator</h1>
         <form action="" method="POST">
                <div>
                <label for="sampleInput">Customer ID</label>
                <input class="full-width" type="text" placeholder="eg: nisha123" id="sampleInput" name="uname">
               </div>
                 <input class="button-primary" type="submit" value="search" name="search">
               <div>
                 <?php

if(isset($_POST['search'])){
  $uname = $_POST['uname'];
  if(!empty($uname)){
    $result="SELECT * from uregister where uname='$uname'";
    $result_run=mysqli_query($con,$result);
    if(!$result_run)
    echo "Error in query.. <br />";
    else {
      while($row=mysqli_fetch_array($result_run,MYSQLI_ASSOC))
      {
           $email_database=$row['uname'];
           echo("<script>alert('Search Successfull Name = $email_database')</script>");
      }
    }
  }else{
    echo "<script>alert('All Field are required!')</script>";
  }
}
         ?>
                <label for="sampleInput">Customer Name</label>
                <input class="full-width" type="text" placeholder="eg: Abcd" id="sampleInput" name="cname">
               </div>
               <div>
                <label for="sampleInput">Bill No</label>
                <input class="full-width" type="text" placeholder="eg: 1234569874" id="sampleInput" name="bno">
               </div>
               <div>
                <label for="exampleMessage">Month</label>
                   <input class="full-width" type="text" placeholder="eg: june" id="sampleInput" name="month">
               </div>
                <div>
                  <label for="exampleMessage">Expiry Date</label>
                  <input class="full-width" type="text" placeholder="expiry date" id="sampleInput" name="edate">
               </div>   
               <div>
                <label for="sampleInput">unit Consumed</label>
                  <input class="full-width" type="text" id="sampleInput" placeholder="1 kilowatt (KWH) cost 9"  name="money1">
               </div>         
                <input class="button-primary" type="submit" value="Submit" name="submit">
             <?php

if(isset($_POST['submit'])){
  @$cname=$_POST['cname'];
  @$bno=$_POST['bno'];
  @$month=$_POST['month'];
  @$edate=$_POST['edate'];
  @$money1=$_POST['money1'];
  @$status="Not Paid";
@$x=12*$money1;
if(!empty($cname)&&!empty($bno)&&!empty($month)){
       @$query="INSERT into caluculatebill values('$cname','$bno','$month','$edate','$x','$status')";
      @$query_pro=mysqli_query($con,$query);
      if($query_pro){
        echo "<script>alert('Thanku!Bill Generated!')</script>";
        echo  "<script>window.open('adminpage.php','_self')</script>";
      }else{
        header("Location:caluculatebill.php");
      }
      }
      else{
    echo "<script>alert('All field are Required!')</script>";
    echo  "<script>window.open('register.php','_self')</script>";
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