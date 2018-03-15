<?php

	require_once 'db_connect.php';

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

if($_POST) {

		$cName = $_POST['cName'];
	    $cBegin = $_POST['cBegin'];
	    $cEnd = $_POST['cEnd'];
	    $cDetails = $_POST['cDetails'];
	    $cSchedule = $_POST['cSchedule'];
	    $cDescription = $_POST['cDescription'];
	    $cPrice = $_POST['cPrice'];
	    $capacity = $_POST['capacity'];
	    

	    $sql = "INSERT INTO cours (cName, cBegin, cEnd, cDetails, cSchedule, cDescription, cPrice, capacity) VALUES ('$cName', '$cBegin', '$cEnd', '$cDetails', '$cSchedule', ' $cDescription', '$cPrice', '$capacity')";

	    if($conn->query($sql) === TRUE) {
	        echo '<p style="color:black; margin-top:30px;">New Record Successfully Created</p>';
	        echo "<a href='../create_course.php'><button type='button' class='custom-btn btn-1'>Back</button></a>";
	        echo "<a href='../home.php'><button type='button' class='custom-btn btn-1'>Home</button></a>";
	    } else {
	        echo "Error " . $sql . ' ' . $conn->connect_error;
	    }
	    $conn->close();
	}

?>

	 </div>
	</div>
	<div>
            
                     
                </div> 
</div>
</body>
</html>
