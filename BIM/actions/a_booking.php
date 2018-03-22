<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
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
                        <li><a href="register.php">Register |</a></li>                
                  </ul>
                </nav>
            </section>
                <?php

                require_once 'db_connect.php';

                if($_POST) {
                    $fname = $_POST['fname'];
                    $lName = $_POST['lName'];
                    $bBegin = $_POST['bBegin'];
                    $bEmail = $_POST['bEmail'];
                    $cId = $_POST['dcName'];



                    $sql = "INSERT INTO booking (fname, lName, bBegin, bEmail, dcName ) VALUES ('$fname', '$lName', '$bBegin','$bEmail','$cId')";

                    if($conn->query($sql) === TRUE) {
                        echo "<div>
                        <center> <img style='width:70%' src='https://i0.wp.com/www.scoutingforbeer.org.uk/wp-content/uploads/2016/04/thank-you-1400x800-c-default.gif'></center>
                    </div>";
                       
                        echo "<a href='../home.php'><button class='custom-btn btn-1' style=' margin-left: 45%;' type='button'>Back to courses</button></a>";
                    } else {
                        echo "Error " . $sql . ' ' . $conn->conn_error;
                    }

                    $conn->close();
                }

                ?>
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