<?php
$servername = "den1.mysql6.gear.host";
$username = "smartparking1";
$password = "karthik!";
$db="smartparking1";

$items = array();
$conn = new mysqli($servername,$username,$password,$db);
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Car Parking</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">  

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header> 

   	<div class="header-logo">
	      <a href="index.html">Infinity</a>
	   </div> 		

		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  


   <!-- home
   ================================================== -->
   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">	
		   		<h1><font color="black">
		   			To Check The Parking Slot</font> 
		   		</h1>	   				
		   		<h1>
		   			<font color="black">
		   			Scroll Down</font>
		   		</h1>

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		<ul class="home-social-list">
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-facebook-square"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-twitter"></i></a>
	      </li>
	      <li class="animate-intro">
	        	<a href="#"><i class="fa fa-instagram"></i></a>
	      </li>     
	   </ul> <!-- end home-social-list -->	

		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		<e/div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">

					<h3 class="animate-this">Available Car Slots</h3>	
					<?php
					$sql = "SELECT * FROM cur_parking";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					    $items[] = $row["flag"];
					    }
					} else {
					    echo "0 results";
					}
					echo"<div class='ab'>";
					if($items[0]=="1"&&$items[1]=="1"&&$items[2]=="1"&&$items[3]=="1")
					{
						echo"<center><img src='p2.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="0"&&$items[2]=="0"&&$items[3]=="0") {
						echo"<center><img src='p1.jpeg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="1"&&$items[2]=="0"&&$items[3]=="0") {
						echo"<center><img src='p10.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="0"&&$items[2]=="1"&&$items[3]=="0") {
						echo"<center><img src='p11.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="0"&&$items[2]=="0"&&$items[3]=="1") {
						echo"<center><img src='p14.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="0"&&$items[2]=="0"&&$items[3]=="0") {
						echo"<center><img src='p5.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="1"&&$items[2]=="0"&&$items[3]=="0") {
						echo"<center><img src='p4.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="1"&&$items[2]=="0"&&$items[3]=="1") {
						echo"<center><img src='p13.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="0"&&$items[2]=="1"&&$items[3]=="1") {
						echo"<center><img src='p12.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="1"&&$items[2]=="0"&&$items[3]=="1") {
						echo"<center><img src='p8.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="0"&&$items[2]=="1"&&$items[3]=="0") {
						echo"<center><img src='p6.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="0"&&$items[2]=="0"&&$items[3]=="1") {
						echo"<center><img src='p7.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="1"&&$items[2]=="1"&&$items[3]=="0") {
						echo"<center><img src='p15.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="1"&&$items[2]=="1"&&$items[3]=="0") {
						echo"<center><img src='p3.jpg'></center>";
					}
					elseif ($items[0]=="0"&&$items[1]=="1"&&$items[2]=="1"&&$items[3]=="1") {
						echo"<center><img src='p16.jpg'></center>";
					}
					elseif ($items[0]=="1"&&$items[1]=="0"&&$items[2]=="1"&&$items[3]=="1") {
						echo"<center><img src='p9.jpg'></center>";
					}
					echo"</div>";
					echo"<div class='cd'>";

					echo"</div>";
					$conn->close();
					?>
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->
   	<div>
   		<br>
   		<br>
   		<a href="abcd.php">
   			<img src="log.jpg" align="right" width="100px" height="100px">
   		</a>
   	</div>

   </section> <!-- end about -->


   
   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

</html>