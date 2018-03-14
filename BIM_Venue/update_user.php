<?php
require_once 'actions/db_connect.php';


if($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM events WHERE id = {$id}";

    $result = $conn->query($sql);

    $data = $result->fetch_assoc();

    $conn->close();

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

                <form action="actions/a_update_user.php" method="post">
                    <table cellspacing="0" cellpadding="0">
                        <tr>
                            <th class="thcreate">Name</th>
                            <td class="tdadd"><input type="text" name="name" placeholder="name" value="<?php echo $data['name'] ?>" /></td>
                        </tr> 
                        <tr>
                            <th class="thcreate">Start date</th>
                            <td class="tdadd"><input type="text" name="startdate" placeholder="startdate" value="<?php echo $data['startdate'] ?>" /></td>
                        </tr> 
                        <tr>
                            <th class="thcreate">End date</th>
                            <td class="tdadd"><input type="text" name="enddate" placeholder="enddate" value="<?php echo $data['enddate'] ?>" /></td>
                        </tr>
                        <tr>
                            <th class="thcreate">Description</th>
                            <td class="tdadd"><input type="text" name="description" placeholder="description" value="<?php echo $data['description'] ?>" /></td>
                        </tr>
                        <tr>
                            <th class="thcreate">Image</th>
                            <td class="tdadd"><input type="text" name="image" placeholder="image" value="<?php echo $data['image'] ?>" /></td>
                        </tr>
                        <tr>
                            <th class="thcreate">Capacity</th>
                            <td class="tdadd"><input type="text" name="capacity" placeholder="capacity" value="<?php echo $data['capacity'] ?>" /></td>
                        </tr>
                        <tr>
                            <th class="thcreate">E-mail</th>
                            <td class="tdadd"><input type="text" name="e-mail" placeholder="e-mail" value="<?php echo $data['email'] ?>" /></td>
                        </tr>

                        <tr>
                            <th class="thcreate">Phone Number</th>
                            <td class="tdadd"><input type="text" name="phone" placeholder="phone" value="<?php echo $data['phone'] ?>" /></td>
                        </tr>

                         <tr>
                            <th class="thcreate">Address</th>
                            <td class="tdadd"><input type="text" name="address" placeholder="address" value="<?php echo $data['address'] ?>" /></td>
                        </tr>

                        <tr>
                            <th class="thcreate">URL</th>
                            <td class="tdadd"><input type="text" name="URL" placeholder="URL" value="<?php echo $data['URL'] ?>" /></td>
                        </tr>
                       
                       <tr>
                            <th class="thcreate">Type</th>
                            <td class="tdadd"><input type="text" name="type" placeholder="type" value="<?php echo $data['type'] ?>" /></td>
                        </tr>
                        <tr>
                            <input type="hidden" name="id" value="<?php echo $data['id']?>" />
                            <td class="tdadd"><button type="submit">Save Changes</button></td>
                            <td class="tdadd"><a href="home-boss.php"><button type="button">Back</button></a></td>
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