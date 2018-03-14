<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

	$res=mysqli_query($conn, "SELECT * FROM admin WHERE userId=".$_SESSION['users']);

	$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<div id="parallax-world-of-ugg">
  
<section>
   <a id="logo" href="#">The BIM Factory</a>
 <nav>
    <ul>
	  <li><a href="#" id="current">Home</a></li>
      <li><a href="login.php">Courses</a></li>
      <li><a href="#">Partner</a></li>
      <li><a href="#">Contact</a></li>
      <li><a href="login.php">Log In</a></li>
    </ul>
  </nav>
  
  

</section>

<section>
  <div class="parallax-three">
    <h2>BIM EDUCATION AND TRAINING</h2>
  </div>
</section>

<!-- <section>
  <div class="block">
     <h1><span class="first-character atw">O</span>ur Courses</h1><br><br>
     <p>We believe that BIM starts and ends with People who execute Process by utilizing Technology. Our Academy is the industry training division of Institute of Virtual Design and Construction (IVDC) we led by an international team of industry professionals dedicated to training and teaching advanced BIM educational curriculum responding to industry demands for qualify BIM professionals.  </p>

    <p class="line-break margin-top-10"></p>
    <p class="margin-top-10"><strong></strong></p>


<div class="container">
  <div class="box_course">
   <span class="icon-cont"><i class="fa fa-graduation-cap"></i></span>
    
    <h3>The Certified BIM Practitioner (CBP ) </h3>
    <p>The Certified BIM Practitioner (CBP) is the first certificate offered by TBFA’s BIM Education Program. It is the best-rounded certificate aiming at existing Architecture, Engineering, Construction and Building Operation professionals. This 16-hour course provides the majority of the important knowledge from understating what Building Information Modeling means to various management systems that are critical for anyone wanting to initiate or jump right into a BIM project.</p>
       <br>
     <br>
    

  </div>   
  
  <div class="box_course">
    <span class="icon-cont"><i class="fa fa-graduation-cap"></i></i></span>
    
    <h3>The Certified BIM Executive (CBE) </h3>
    <p>The Certified BIM Executive (CBE) is the second certificate offered by TBFA’s BIM Education Program. It is one of the most well-rounded certificate aiming at executives or senior managers within Viennas's Architecture, Engineering, Construction and Building Operation professionals. This 1-day course provides an overview of the important knowledge from understating what Building Information Modeling means to Building Management systems that are critical for executives who want to initiate BIM on their existing project immediately.


    </p>

 
  </div>
  
  
  <div class="box_course">
    <span class="icon-cont"><i class="fa fa-graduation-cap"></i></span>
    
    <h3>The Certified BIM Manager (CBM)</h3>
    <p>The Certified BIM Manager (CBM) is the third and most advanced certificate offered by TBFA’s BIM Education Program. It is a must have certification for anyone who intends to work and participate in Vienna's AEC industry in the immediate future. This 30-hour course provides an in-depth look at Building Information Modeling and Building Management systems that are required to apply for the majority of the construction projects.</p>
    <br>
     <br>
      <br>
    


  

</div>  
</div>

</section> -->

	<?php

	if	($userRow['users'] == 0) {
		?>
		<div class="block">
    		<h1><span class="first-character ny">C</span>ourse</h1>
    		<br>
    		<br>
    		<br>
		<div class="">
	
			    <table border="1" cellspacing="0" cellpadding="0">
			        <tbody>
			      		<?php

			              $sql = "SELECT cId, cName, cBegin, cEnd, cDetails, cSchedule, cDescription, cPrice, capacity FROM cours";
			              $result = $conn->query($sql);


			              if($result->num_rows > 0) {
			                  while($row = $result->fetch_assoc()) {
			                      echo "
  										  <div class='box_course'>
   											 <span class='icon-cont'><i class='fa fa-graduation-cap'></i></span>
			                            		<a href='view.php?id=".$row['cId']."'>
			                              		<div class='caption'>
				                                <p>".$row['cName']."</p>
				                                <p>".$row['cBegin']."</p>
				                                <p>".$row['cEnd']."</p>
				                                <p>".$row['cDetails']."</p>
				                                <p>".$row['cSchedule']."</p>
				                                <p>".$row['cDescription']."</p>
				                                <p>".$row['cPrice']."</p>
				                                <p>".$row['capacity']."</p>

				                                 <div class='buttons-coll'>
  
  

			                                <a href='update_course.php?id=".$row['cId']."'><button class='custom-btn btn-1' type='button'>Edit</button></a>
				                            <a href='delete_course.php?id=".$row['cId']."'><button class='custom-btn btn-1' type='button'>Delete</button></a> 
			                              </div>
			                              </div>
			                            </a>
			                          </div>
			                        </div>";
				                            }
				                        } 
			              	else {
			                  echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			              		}
			            ?>
			        </tbody>
			    </table>
			    	<div class="buttons-coll">
			    	<a href='create_course.php'><button class="custom-btn btn-1" type='button'>Add Course</button></a>
			    </div>
			    	                              	
		  	</div>
		  </div>


    
	
   <div class="block">
    		<h1><span class="first-character atw">U</span>ser</h1>
    		<br>
    		<br>
    		<br>
		<div class="">
		    
			    <table border="1" cellspacing="0" cellpadding="0">
			        <tbody>

			      		<?php

			              $sql = "SELECT userId, userName, userEmail FROM admin";
			              $result = $conn->query($sql);


			              if($result->num_rows > 0) {
			                  while($row = $result->fetch_assoc()) {
			                      echo "
  										  <div class='box_course'>
   											<span class='icon-cont'><i class='fa fa-user'></i></span>
			                            <a href='view.php?id=".$row['userId']."'>
			                              <div class='caption'>
			                                <p>".$row['userName']."</p>
			                                <div class='buttons-coll'>
				                            <a href='delete_user.php?id=".$row['userId']."'><button class='custom-btn btn-1' type='button'>Delete User</button></a>
				                            </div>  
			                              </div>
			                            </a>
			                          </div>
			                        </div>";
				                            }
				                        } 
			              	else {
			                  echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			              		}
			            ?>
			        </tbody>
			    </table>    	
		  	</div>
		  </div>
		  		 <div class="buttons-coll">
				<button class="custom-btn btn-1" id="sign-out">
					<a href="logout.php?logout">Sign Out</a>
				</button>
			</div>	

    <?php
	}
	
	else
		 {
		?>
		<h3 style="color:white">Course</h3>
			    <table border="1" cellspacing="0" cellpadding="0">
			        <tbody>
			      		<?php

			              $sql = "SELECT cId, cName, cBegin, cEnd, cDetails, cSchedule, cDescription, cPrice, capacity FROM cours";
			              $result = $conn->query($sql);


			              if($result->num_rows > 0) {
			                  while($row = $result->fetch_assoc()) {
			                      echo "
  										  <div class='box_course'>
			                            <a href='view.php?id=".$row['cId']."'>
			                              <div class='caption'>
			                                <p>".$row['cName']."</p>
			                                <p>".$row['cBegin']."</p>
			                                <p>".$row['cEnd']."</p>
			                                <p>".$row['cDetails']."</p>
			                                <p>".$row['cSchedule']."</p>
			                                <p>".$row['cDescription']."</p>
			                                <p>".$row['cPrice']."</p>
			                                <p>".$row['capacity']."</p>


			                              </div>
			                            </a>
			                          <div>
			                        </div>";
				                            }
				                        } 

			              	else {
			                  echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			              		}
			            ?>
			             <div class="buttons-coll">
				<button class="custom-btn btn-1" id="sign-out">
					<a href="logout.php?logout">Logout</a>
				</button>
			</div>	
			        </tbody>
			    </table>
 	
		  	</div>


    <?php
	}

	?>
				

</div>
</body>
</html>