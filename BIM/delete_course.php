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

            			<h3>Do you really want to delete this Course?</h3>

            			<form action="actions/a_delete_course.php" method="post">
            			    <input type="hidden" name="id" value="<?php echo $data['cId'] ?>" />
            			    <button type="submit" class="custom-btn btn-1">Yes, delete it!</button>
            			    <a href="home.php"><button type="button" class="custom-btn btn-1">No, go back!</button></a>
            			</form>
            			 
            		</div>
            	  </div>
            	  <div>
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

<?php
}
?>