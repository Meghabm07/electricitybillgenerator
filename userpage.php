<?php
include("db.php");
session_start();
$user=$_SESSION["session_user"];
if(!isset($user)){
  header("Location: login.php");
}
else
{
  @$query="SELECT uregister.*, caluculatebill.* FROM uregister , caluculatebill WHERE uregister.uname = caluculatebill.cname and uname='$user'";
@$query_pro=mysqli_query($con,$query);
// @mysqli_free_result($result);
// @mysqli_close($db);
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
     <div class="row add-bottom">

      	<div class="col-twelve">
          <h2>Welcome <?php echo $user; ?></h2>
      		<h3>View Bill</h3>
      		
      		<div class="table-responsive">

      			<table>
					  <thead>
					    <tr style="background-color: #ff7200;">
					      <th>Service Number</th>
					      <th>Name</th>
					      <th>Address</th>
					      <th>Contact Number</th>	
					      <th>Month</th>
					      <th>Amount</th>
					      <th>Status</th>				    
					    </tr>
					  </thead>
					  <tbody>
					  <?php
                      while (@$row = mysqli_fetch_array($query_pro, MYSQL_ASSOC))
                       {
                         echo '<tr>
                         <td>'.$row['bno'].'</td>
                         <td>'.$row['uname'].'</td>
                         <td>'.$row['uadd'].'</td>
                         <td>'.$row['ucno'].'</td>
                         <td>'.$row['month'].'</td>
                         <td>'.$row['money'].'</td>
                         <td>'.$row['status'].'</td>
                          </tr>';
                        }?>
					    <tr>
					      <td></td>
					      <td></td>
					      <td></td>
					      <td></td>  
					      <td></td>
					      <td></td>
					      <td></td>			    
					    </tr>
					  </tbody>
					</table>

      		</div>     		

      	</div>
      	
      </div> <!--row -->

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