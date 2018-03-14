<?php
require_once 'actions/db_connect.php';
?>

<!DOCTYPE html>
<html>
	<head>
		<title>index.php</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div id="parallax-world-of-ugg">
		  
			<section>
				<a id="logo" href="#">The BIM Factory</a>
				<nav>
				    <ul>
						<li><a href="index.php" id="current">Home</a></li>
					    <li><a href="login.php">Courses</a></li>
					    <li><a href="news.php">News</a></li>
					    <li><a href="contact.php">Contact</a></li>
					    <li><a href="login.php">Log In</a></li>
				    </ul>
				</nav>
			</section>

			<section>
			    <div class="parallax-one">
			      <h2>Still don't know what BIM is?</h2>
			    </div>
			</section>

			<section>
				<div class="block">
			  		<h1>
			  			<span class="first-character sc">A</span>bout Us</h1><br><br>
				    <p>Creative BIM Solutions for all project types.
				    THE BIM FACTORY is the leader of the BIM process and a one-of-a-kind modeling production company in Austria since 2014. Located in District 5 of Vienna, we work closely with our clients all over the globe to assist them to achieve their BIM and VDC goals. </p>
				    <p class="line-break margin-top-10"></p>
				    <p class="margin-top-10">Don't be in despair, we are all in the same boat. Being a leader in the BIM consultancy in Austria for the last 4 years, we know we still have a lot to learn about the real potentials and the true value of BIM on every project we work on. Below is an awesome video by our Partner Autodesk to give a general overview of what BIM is all about. 
				    If you still have questions, don't hesitate to <a href="#"><strong>contuct</strong></a> us and we will show you how BIM can help you win more work and get ahead of the competition for any project. </p>

			    	<iframe width="800" height="550" src="https://www.youtube.com/embed/B2vmlBXRuBU" frameborder="0" allowfullscreen></iframe>

				</div>
			</section>

			<section>
			  	<div class="parallax-two">
			    	<h2>BIM DESIGN</h2>
			  	</div>
			</section>

			<section>
				<div class="block">
			    	<h1><span class="first-character ny">T
			    		</span>The next big thing in BIM</h1><br><br>

					<p>We are the few BIM-enabled design consultancy company in Vienna.
					BIM is not just software, it is an entire process of design, engineering, construction, operation, and facility management. Since we are one of the leaders in the BIM process in Vietnam and have supported various Vietnamese companies to adopt BIM, we thought we should use this efficient BIM process for ourselves when we design. 
					 We are the few BIM-enabled design consultancy company in Vietnam.
					BIM is not just software, it is an entire process of design, engineering, construction, operation, and facility management.
					<p class="line-break margin-top-10"></p>
					<p class="margin-top-10" style="font-size: 20pt;">Some of our BIM design consultancy services are</p>

			          <li>
			            <i>Architectural BIM design</i>
			          </li>

			          <li>
			            <i>Structural BIM design</i>
			          </li>

			          <li>
			            <i>Landscape BIM design</i>
			          </li>

			          <li>
			            <i>Visualization</i>
			          </li>

			          <li>
			            <i>Animation</i>
			          </li>
			  
				</div>
			</section>

			<section>
			 	<div class="parallax-three">
			    	<h2>BIM EDUCATION AND TRAINING</h2>
				</div>
			</section>

			<section>
				<div class="block">
				    <h1><span class="first-character atw">O</span>ur Courses</h1><br><br>
				    <p>We believe that BIM starts and ends with People who execute Process by utilizing Technology. Our Academy is the industry training division of Institute of Virtual Design and Construction (IVDC) we led by an international team of industry professionals dedicated to training and teaching advanced BIM educational curriculum responding to industry demands for qualify BIM professionals.  </p>

				    <p class="line-break margin-top-10"></p>
				    <p class="margin-top-10"><strong></strong></p>
					


			
			        <?php
			            $sql = "SELECT cName,cDescription, cId FROM cours";
			            $result = $conn->query($sql);
			 
			              
			            if($result->num_rows > 0) {
			                while($row = $result->fetch_assoc()) {
			                    echo "
				                        
				                    <div class='box_course'>        	
				                        <span class='icon-cont'><i class='fa fa-graduation-cap'></i></span>     	
					                    <h3>".$row['cName']."</h3>
				                        <p>".$row['cDescription']."</p>
			                        
			                        <div class='buttons-coll'>
			                       		<a href='view.php?id=".$row['cId']."'>
			  							<button class='custom-btn btn-1'><a style='text-decoration: none;font-family:'Oswald','serif';color:black' href='login.php'>Log In to see more</a></button>


			  						</div>	
			                        </div>";
			                }
			            }
			      
			            ?>
	

			
			
			</section>
		  
		</div>
	</body>
</html>