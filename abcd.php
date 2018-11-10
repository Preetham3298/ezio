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
	      <a href="index.php">Infinity</a>
	   </div> 		
		</nav>  <!-- end #menu-nav-wrap -->

	</header> <!-- end header -->  
	   <section id="services">
	   		<div class="overlay"></div>
	   		<center >
	   			<h1><font color="white">Parking Logs</font></h1>
	   		</center>
	   		<table>
	   			<tr>
	   			<th><font color="white">Car Id</th>
	   			<th><font color="white">slot number</font></th>	
	 			<th><font color="white">In Date</font></th>
	 			<th><font color="white">In Time</font></th>
	 			<th><font color="white">Out Date</font></th>
	 			<th><font color="white">Out Time</font></th>
	 			</tr>
	 				<?php
					$sql = "SELECT id,slot_no,in_date,in_time,out_date,out_time,total_time FROM parking_log";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {    
				 			echo"<tr>";
				 			echo"	<td>"; 
				 						echo $row["id"]; 
				 			echo"	</td>";
				 			echo"	<td>"; 
				 						echo $row["slot_no"]; 
				 			echo"	</td>";
				 			echo"	<td>"; 
				 						echo $row["in_date"]; 
				 			echo"	</td>";
				 			echo"	<td>"; 
				 						echo $row["in_time"]; 
				 			echo"	</td>";
				 			echo"	<td>"; 
				 						echo $row["out_date"]; 
				 			echo"	</td>";
				 			echo"	<td>"; 
				 						echo $row["out_time"]; 
				 			echo"	</td>";
				 			echo"</tr>";

					    }
					} else {
					    echo "0 results";
					}
					$i=0;
					
					$conn->close();
					?>   
			
	   		</table>
</div>
	   </section> <!-- end services -->

</body>
</html>
