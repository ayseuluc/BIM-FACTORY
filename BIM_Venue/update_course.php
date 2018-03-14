<?php
require_once 'actions/db_connect.php';


if($_GET['id']) {
    $cid = $_GET['id'];
        
    $sql = "SELECT * FROM cours WHERE cId = {$cid}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();
//echo$data['cId'];
?>

<!DOCTYPE html>
<html>
<head>

    <title>Edit Events</title>
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

    <style type="text/css">
        fieldset {
            margin: auto;
            margin-top: 100px;
            width: 50%;
        }

        table tr th {
            padding-top: 20px;
        }
    </style>
</head>
<body>
     <div class="container1">
      <div class="row">
        <div class="col-md-4">
          <header id="header" class="myheader">
            <h1 id="headerh1"></h1>
          </header>

            <h1 class="h1-top">Global event management company</h1>

            <fieldset>
                <legend>Update Events</legend>

                <form action="actions/a_update_course.php" method="post">
                    <table>
                        <tr>
                        <th class="thcreate">Name</th>
                        <td class="tdadd"><input type="text" name="cName" placeholder="cName" value="<?php echo $data['cName'] ?>" /></td>
                    </tr> 
                    <tr>
                        <th class="thcreate">Begin</th>
                        <td class="tdadd"><input type="text" name="cBegin" placeholder="cBegin" value="<?php echo $data['cBegin'] ?>" /></td>
                    </tr> 
                    <tr>
                        <th class="thcreate">End</th>
                        <td class="tdadd"><input type="text" name="cEnd" placeholder="cEnd" value="<?php echo $data['cEnd'] ?>" /></td>
                    </tr>
                    <tr>
                        <th class="thcreate">Details</th>
                        <td class="tdadd"><input type="text" name="cDetails" placeholder="cDetails" value="<?php echo $data['cDetails'] ?>" /></td>
                    </tr>
                    <tr>
                        <th class="thcreate">Schedule</th>
                        <td class="tdadd"><input type="text" name="cSchedule" placeholder="cSchedule" value="<?php echo $data['cSchedule'] ?>" /></td>
                    </tr>
                    <tr>
                        <th class="thcreate">Description</th>
                        <td class="tdadd"><input type="text" name="cDescription" placeholder="cDescription" value="<?php echo $data['cDescription'] ?>" /></td>
                    </tr>
                    <tr>
                        <th class="thcreate">Price</th>
                        <td class="tdadd"><input type="text" name="cPrice" placeholder="cPrice" value="<?php echo $data['cPrice'] ?>" /></td>
                    </tr>

                     <tr>
                        <th class="thcreate">Capacity</th>
                        <td class="tdadd"><input type="text" name="capacity" placeholder="capacity" value="<?php echo $data['capacity'] ?>" /></td>
                    </tr>
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $data['cId']?>" />
                            <td class="tdadd"><button type="submit">Save Changes</button></td>
                            <td class="tdadd"><a href="home.php"><button type="button">Back</button></a></td>
                        </tr>
                    </table>
                </form>
            </fieldset>
                <div>
                      <p><a href="#">Back to top</a></p>
                      <a href="login.php">Admin</a>
                      <footer class="fixed-bottom">
                        <p> &copy; Giava Ferrandina - CodeFactory 2018</p>     
                      </footer>
                </div> 
        </div>
      </div>
    </div>
</body>
</html>

<?php
}
?>