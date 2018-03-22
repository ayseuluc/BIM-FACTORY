<!DOCTYPE html>
<html>
<head>
    <title></title>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
     <div id="parallax">
            <section>
              <img id="png" src="img/logo.png" alt="">
                <nav>
                   <ul>
                        <li><a href="index.php" id="current">Home |</a></li>
                        <li><a href="login.php">Courses |</a></li>
                        <li><a href="booking.php">Booking|</a></li>
                        <li><a href="news.php">News |</a></li>
                        <li><a href="contact.php">Contact |</a></li>
                        <li><a href="ourpartners.php">Partner |</a></li>
                        <li><a href="register.php">Register</a></li>
                        <li><button class="btn" id="sign-out">
                  </ul>
                </nav>
            </section>
			<section>
			<div class="parallax-five">
				<h2> DON'T MESS WITH ME!<br>
			  	I'AM THE ADMIN</h2>
			</section>
			    <fieldset>
			    	<h1><span class="first-character atw">C</span>reate</h1>
                    <h1><span class="first-character atw">C</span>ourse</h1>

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
		                <td class="tdadd"><input type="date" name="cBegin" placeholder="cBegin" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">End</th>
		                <td class="tdadd"><input type="date" name="cEnd" placeholder="cEnd" value="" /></td>
		            </tr>
		            <tr>
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
		<footer>
	      <a class="fa fa-lg fa-github" href="https://github.com/hadasamanis99" style="text-decoration: none; color: grey;">Hadasa Geiger |</a>
	      <a class=" fa fa-lg fa-github" href="https://github.com/ayseuluc"  style="text-decoration: none; color: grey;">Ayse Uluc |</a>
	      <a class=" fa fa-lg fa-github" href="https://github.com/Qying23"  style="text-decoration: none; color: grey;">Ying Qi |</a>
	      <a class=" fa fa-lg fa-github" href="https://github.com/giavanna"  style="text-decoration: none; color: grey;">Giava Ferrandina |</a>
	      <a class=" fa fa-lg fa-github" href="https://github.com/mirautas"  style="text-decoration: none; color: grey;">Simona Mirauta |</a>
	      <a class=" fa fa-lg fa-github" href="https://github.com/stepienm"  style="text-decoration: none; color: grey;">Manuela Stepien </a>
		</footer>

</body>
</html>