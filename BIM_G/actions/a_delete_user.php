<?php

	require_once 'db_connect.php';

?>
<!DOCTYPE html>
<html>
<head>

    <title>Delete Events</title>
     

  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../events.css">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Coiny|Indie+Flower" rel="stylesheet">
<body>
    <div class="container1">
	  <div class="row">
		<div class="col-md-4">
	      <header id="header" class="myheader">
	        <h1 id="headerh1"></h1>
	  	  </header>

	  		<h1 class="h1-top"></h1>

<?php


	if($_POST) {

	    $id = $_POST['id'];
	    $sql = "DELETE FROM admin WHERE userId = {$id}";

	    if($conn->query($sql) === TRUE) {
	        echo '<p style="color:black; margin-top:30px;">Successfully deleted!!</p>';
	        echo "<a href='../home.php'><button type='button'>Back</button></a>";
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
