<?php

require_once 'db_connect.php';

?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Events</title>

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

 </head>

  <body>
     <div class="container1">
      <div class="row">
        <div class="col-md-4">
          <header id="header" class="myheader">
            <h1 id="headerh1"></h1>
          </header>

            <h1 class="h1-top">Global event management company</h1>

<?php

	if($_POST) {
      $cid = $_POST['id'];
	    $cName = $_POST['cName'];
      $cBegin = $_POST['cBegin'];
      $cEnd = $_POST['cEnd'];
      $cDetails = $_POST['cDetails'];
      $cSchedule = $_POST['cSchedule'];
      $cDescription = $_POST['cDescription'];
      $cPrice = $_POST['cPrice'];
      $capacity = $_POST['capacity'];

	    $sql = "UPDATE cours SET cName = '$cName', cBegin = '$cBegin', cEnd = '$cEnd', cDetails = '$cDetails', cSchedule = '$cSchedule', cDescription = '$cDescription', cPrice = '$cPrice', capacity = '$capacity' WHERE cId = '$cid'";

	    if($conn->query($sql) === TRUE) {
	        echo '<p style="color: black;margin-top:30px;">Succcessfully Updated</p>';
          
	        echo "<a href='../update_course.php?id=".$cid."'><button type='button'>Back</button></a>";
	        echo "<a href='../home.php'><button type='button'>Home</button></a>";
	    } else {
	        echo "Erorr while updating record : ". $conn->error;
	    }

	    $conn->close();

	}
?>

        </div>

    </div>
    <div>
                     
                      <footer class="fixed-bottom">
                        <p> &copy; Giava Ferrandina - CodeFactory 2018</p>     
                      </footer>
                    </div> 
</div>
</body>
</html>