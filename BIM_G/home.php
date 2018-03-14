<?php 
	ob_start();
	session_start();
	require_once 'actions/db_connect.php'; 
	

	$res=mysqli_query($conn, "SELECT * FROM admin WHERE userId=".$_SESSION['users']);
echo$_SESSION['users'];
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

			              $sql = "SELECT cId, image, cName, cBegin, cEnd, cDetails, cSchedule, cDescription, cPrice, capacity FROM cours";
			              $result = $conn->query($sql);


			              if($result->num_rows > 0) {
			                  while($row = $result->fetch_assoc()) {
			                      echo "
  										  <div class='box_course'>
   											 <span class='icon-cont'><i class='fa fa-graduation-cap'></i></span>
			                            		<a href='view.php?id=".$row['cId']."'></a>
			                            		 <img class='' src='http://localhost/crud/BIM-FACTORY/BIM_Venue/img/".$row['image']."'style='width:100%; height:120px;>
			                              		<div class='caption'>
				                                <p>".$row['cName']."</p>
				                                <p>".$row['cPrice']." € </p>
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
			                            <a href='view.php?id=".$row['userId']."'></a>
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
		<div class="block">
    		<h1><span class="first-character ny">C</span>ourse</h1>
    		<br>
    		<br>
    		<br>
		<div class="">
	
			    <table border="1" cellspacing="0" cellpadding="0">
			        <tbody>
			      		<?php

			              $sql = "SELECT cId, image, cName, cBegin, cEnd, cDetails, cSchedule, cDescription, cPrice, capacity FROM cours";
			              $result = $conn->query($sql);


			              if($result->num_rows > 0) {
			                  while($row = $result->fetch_assoc()) {
			                      echo "
  										  <div class='box_course'>
   											 <span class='icon-cont'><i class='fa fa-graduation-cap'></i></span>
			                            		<a href='view.php?id=".$row['cId']."'></a>
			                            		 <img class='' src='http://localhost/crud/BIM-FACTORY/BIM_Venue/img/".$row['image']."'style='width:100%; height:120px;>
			                              		<div class='caption'>
				                                <p>".$row['cName']."</p>
				                                <p>".$row['cPrice']." € </p>
				                                <button type='button' class='custom-btn btn-1'>read more</button>
			                              </div>
			                              </div>
			                            </a>
			                          </div>
			                        </div>";
				                            }
				                        } 
			              	
			            ?>
			        </tbody>
			    </table>
			    	
			    	                              	
		  	</div>
		  </div>	                          
			          
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