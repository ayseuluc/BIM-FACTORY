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

        <title>View Event</title>
        <link rel="stylesheet" type="text/css" href="css/addStyle.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            body{
              background-color:#e1f4f5;
            }
            .scart{
                background-color:#19c3cc;
                width: 170px;
                height: 150px;
            }
            .cart_details {
                width: 109px;
                float: left;
                padding: 15px 0 0 15px;
                text-align: left;
            }
            .cart_details {
                width: 109px;
                float: left;
                padding: 5px 0 0 15px;
                text-align: left;
            }
            .cart_icon {
                float: left;
                padding: 5px 0 0 5px;
            }

            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 50%;
            }

            table tr th {
                padding-top: 20px;
            }

            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }

            table tr{
                background-color: white;
            }

             td, th {
                border: 1px solid white;
                text-align: left;
                padding: 8px;
                width: 20%;
                background-color: white;    
              }
              th{
                color: grey;
              }
            button{
                font-size: 20px;
                border-radius: 5px;
                
            }
            /*----------------------shopping cart--------------*/


        </style>
    </head>

    <body>
       
<!-- ********** shopping cart ********** -->

        <fieldset>

            <legend>Cours View</legend>

            <form action="actions/a_create.php" method="post">

                <table cellspacing="0" cellpadding="0">
                    <img src='http://localhost/BIM/img/<?php echo $data['image'] ?>' style='width:100%;height:250px;'>
                    <tr>
                        <th>Name</th>
                        <td><?php echo $data['cName'] ?></td>
                    </tr> 
                    <tr>
                        <th>Course Begin</th>
                        <td><?php echo $data['cBegin'] ?></td>
                    </tr>     
                    <tr>
                        <th>Course End</th>
                        <td><?php echo $data['cEnd'] ?></td>
                    </tr>
                    <tr>
                        <th>Capacity</th>
                        <td><?php echo $data['capacity'] ?> Person </td>
                    </tr>
                    <tr>
                        <th>Cost</th>
                        <td><?php echo $data['cPrice'] ?> €</td>
                    </tr>
                     <tr>
                        <th>Description</th>
                        <td> <?php echo $data['cDescription'] ?></td>

                    </tr>
                     
                    
                    <tr>
                        
                        <th><a href="index.php"><button type="button">Back</button></a></th>
                        <td><a href="booking.php"><button type="button">Booking</button></a></td>
                    </tr>
                   

                </table>

            </form>

        </fieldset>


  
    </body>

</html>

<?php
}
?>