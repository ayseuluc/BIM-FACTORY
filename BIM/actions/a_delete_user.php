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

	    $id = $_POST['id'];
	    $sql = "DELETE FROM admin WHERE userId = {$id}";

	    if($conn->query($sql) === TRUE) {
	        echo '<p style="color:black; margin-top:30px;">Successfully deleted!!</p>';
	        echo "<a href='../home.php'><button type='button' class='custom-btn btn-1'>Back</button></a>";
	    } else {
	        echo "Error updating record : " . $conn->error;

	    }

	    $conn->close();
	}

?>

	 </div>
	</div>
	<div>
            
                      <footer class="fixed-bottom">
                        <p> &copy; </p>     
                      </footer>
                </div> 
</div>
</body>
</html>
