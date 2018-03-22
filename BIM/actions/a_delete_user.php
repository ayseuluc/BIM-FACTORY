    <?php

    	require_once 'db_connect.php';

    ?>
    <!DOCTYPE html>
    <html>
    <head>
      <title></title>
      <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
     <div id="parallax"> 
            <section>
              <img id="png" src="../img/logo.png" alt="">
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
            </section><?php
            	if($_POST) {

            	    $id = $_POST['id'];
            	    $sql = "DELETE FROM admin WHERE userId = {$id}";

            	    if($conn->query($sql) === TRUE) {
            	         echo '<h2 style=";margin-top:30px;">User Account succcessfully  deleted</h2>';
            	        echo "<a href='../home.php'><button class='custom-btn btn-1' type='button'  style='margin-left: 45%'>Back to users</button></a>";
            	    } else {
            	        echo "Error updating record : " . $conn->error;
            	    }
            	    $conn->close();
            	}
            ?>
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
