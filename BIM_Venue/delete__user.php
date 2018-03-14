<?php

require_once 'actions/db_connect.php';

if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM admin WHERE userId = {$id}";
    $result = $conn->query($sql);
    $data = $result->fetch_assoc();

    $conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Events</title>
    <link rel="stylesheet" type="text/css" href="events.css">

  <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">

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

            <h1 class="h1-top"></h1>

			<h3>Do you really want to delete this Event?</h3>

			<form action="actions/a_delete_user.php" method="post">
			    <input type="hidden" name="id" value="<?php echo $data['id'] ?>" />
			    <button type="submit">Yes, delete it!</button>
			    <a href="home.php"><button type="button">No, go back!</button></a>
			</form>
			 
		</div>
	  </div>
	  <div>
               <footer class="fixed-bottom" id="footerdelete">
                    <p> &copy; Giava Ferrandina - CodeFactory 2018</p>     
               </footer>
             </div> 

    </div>

</body>
</html>

<?php
}
?>