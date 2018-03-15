<!DOCTYPE html>

<html>
    <head>
        <title>payment</title>
        <link rel="stylesheet" type="text/css" href="css/addStyle.css">

    </head>

    <body>

    <fieldset>

        <legend>Booking Cours</legend>

        <form action="actions/a_booking.php" method="post">

            <table cellspacing="0" cellpadding="0">
                <tr>
                    <th>First Name</th>
                    <td><input type="text" name="fname" placeholder="First Name"/></td>
                </tr>     
                
                <tr>
                    <th>Last Name</th>
                    <td><input type="text" name="lName" placeholder="Last Name"/></td>
                </tr>

                <tr>
                    <th>Cours Name</th>
                    <td><input type="text" name="dcName" placeholder="Cours Name"/></td>
                </tr>

                <tr>
                    <th>Course Begin</th>
                    <td><input type="date" name="bBegin" placeholder="" /></td>
                </tr>
                
                <tr>
                    <th>Email</th>
                    <td><input type="text" name="bEmail" placeholder="Email"/></td>
                </tr>
    

                <tr>
                    <td><a href="home.php"><button type="button">Back to courses</button></a></td>
                
                    <td><a href="fin.php"><button> Proceed</button></td>
                 </tr>   

            </table>

        </form>

    </fieldset>

    </body>

</html>

