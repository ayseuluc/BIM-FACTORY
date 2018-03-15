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
      <li><a href="index.php" id="current">Home</a></li>
      <li><a href="login.php">Courses</a></li>
      <li><a href="news.php">News</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="login.php">Log In</a></li>
  </ul>
  
  

</section>

<section>
  <div class="parallax-three">
    <h2>BIM EDUCATION AND TRAINING</h2>
  </div>
</section>

			    
			    <form action="actions/a_create_course.php" method="post">
			        <table>
			        	 <tr>
		                <th class="thcreate">Image</th>
		                <td class="tdadd"><input type="text" name="image" placeholder="image" value="" /></td>
		            	</tr>

			            <tr>
		                <th class="thcreate">Name</th>
		                <td class="tdadd"><input type="text" name="cName" placeholder="cName" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">Begin</th>
		                <td class="tdadd"><input type="text" name="cBegin" placeholder="cBegin" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">End</th>
		                <td class="tdadd"><input type="text" name="cEnd" placeholder="cEnd" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Details</th>
		                <td class="tdadd"><input type="text" name="cDetails" placeholder="cDetails" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Schedule</th>
		                <td class="tdadd"><input type="text" name="cSchedule" placeholder="cSchedule" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Description</th>
		                <td class="tdadd"><input type="text" name="cDescription" placeholder="cDescription" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Price</th>
		                <td class="tdadd"><input type="text" name="cPrice" placeholder="cPrice" value="" /></td>
		            </tr>

		             <tr>
		                <th class="thcreate">Capacity</th>
		                <td class="tdadd"><input type="text" name="capacity" placeholder="capacity" value="" /></td>
		            </tr>
			            <tr>
			                <td class="tdadd"><button type="submit" class='custom-btn btn-1'>Insert Course</button></td>
			                <td class="tdadd"><a href="home.php"><button type="button" class='custom-btn btn-1'>Back</button></a></td>
			            </tr>
			        </table>
			    </form>
			</fieldset>
		</div>
  	  </div>
		</div>
		

</body>
</html>