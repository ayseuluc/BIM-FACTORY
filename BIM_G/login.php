<?php

  ob_start();
  session_start();

  require_once 'actions/db_connect.php';



  // it will never let you open index(login) page if session is set
  if ( isset($_SESSION['users'])!="" ) {
    header("Location: home.php");

    exit;
  }

  $error = false;
  $email = "";
  $pass = "";
  $name = "";
  $nameError ="";
  $emailError = "";
  $passError = "";

  if( isset($_POST['btn-login']) ) {

    // prevent sql injections/ clear user invalid inputs
    $email = trim($_POST['email']); 
    $email = strip_tags($email);
    $email = htmlspecialchars($email);

    $pass = trim($_POST['pass']);
    $pass = strip_tags($pass);
    $pass = htmlspecialchars($pass);

    // prevent sql injections / clear user invalid inputs
    if(empty($email)){

      $error = true;
      $emailError = "Please enter your email address.";

    } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {

      $error = true;
      $emailError = "Please enter valid email address.";
    }

    if(empty($pass)){

      $error = true;
      $passError = "Please enter your password.";
    }

    // if there's no error, continue to login
    if (!$error) {
      $password = hash('sha256', $pass); // password hashing using SHA256

      $res=mysqli_query($conn, "SELECT userId, userName, userPass FROM admin WHERE userEmail='$email'");

      $row=mysqli_fetch_array($res, MYSQLI_ASSOC);

      $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
      if( $count == 1 && $row['userPass']==$password ) {

     $_SESSION['users'] = $row['userId'];
     header("Location: home.php");

     } 
      
}
      else {

        $errMSG = "Incorrect Credentials, Try again...";

      }

    }

?>

<!DOCTYPE html>
<html>
<head>
  <title>The BIM Factory</title>

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
  <link rel="stylesheet" type="text/css" href="events.css">

  <style type="text/css">
    
    #box{
      background-color: rgba(255,255,255,0.6);
      padding: 10%;
    }
  </style>
</head>

<body>
 <div class="container1">
  <header id="header" class="">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-4">
      <h1 class="h1-top">The BIM Factory</h1> 
      
      <div class="form_div">
          <div id="link">
            <a href="register.php">Sign Up Here...</a>
          </div>
        <form class="form-inline" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">


          <?php
            if ( isset($errMSG) ) {
              echo $errMSG; ?>

            <?php
            }

          ?>
          <input type="email" name="email" class="form-control" placeholder="email" value="<?php echo $email; ?>" maxlength="40" />

          <span class="text-danger"><?php echo $emailError; ?></span>

          <input type="password" name="pass" class="form-control" placeholder="password" maxlength="15" value="<?php echo $pass; ?>"/>

          <span class="text-danger"><?php echo $passError; ?></span>


          <button type="submit" name="btn-login">Login</button>
          
        </form>
        </div>
      </div>
    </div> 
    </header><!-- /header -->
</div>
                    <div>
                      <footer class="fixed-bottom">
                        <p> &copy;CodeFactory 2018</p>     
                      </footer>
                    </div> 
</body>
</html>
<?php ob_end_flush(); ?>