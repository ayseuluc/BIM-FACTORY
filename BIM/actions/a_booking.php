<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" type="text/css" href="../css/addStyle.css">

</head>
<body>

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
        <center> <h2>You will get a Email about that cours and the payment information</h2></center>
    </div>";
       
        echo "<a href='../home.php'><button type='button'>Home</button></a>";
    } else {
        echo "Error " . $sql . ' ' . $conn->conn_error;
    }

    $conn->close();
}

?>

</body>
</html>