<?php

require_once 'actions/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM cours WHERE cId = {$id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    $conn->close();
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

			<h3>Do you really want to delete this Course?</h3>

			<form action="actions/a_delete_course.php" method="post">
			    <input type="hidden" name="id" value="<?php echo $data['cId'] ?>" />
			    <button type="submit" class="custom-btn btn-1">Yes, delete it!</button>
			    <a href="home.php"><button type="button" class="custom-btn btn-1">No, go back!</button></a>
			</form>
			 
		</div>
	  </div>
	  <div>
               <footer class="fixed-bottom" id="footerdelete">
                    <p> &copy; </p>     
               </footer>
             </div> 

    </div>

</body>
</html>

<?php
}
?>