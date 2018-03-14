<!DOCTYPE html>
<html>
<head>

    <title>Add User</title>
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
			    <legend>Add User</legend>
			    
			    <form action="actions/a_create_user.php" method="post">
			        <table>
			            <tr>
		                <th class="thcreate">User Name</th>
		                <td class="tdadd"><input type="text" name="userName" placeholder="userName" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">User E-mail</th>
		                <td class="tdadd"><input type="text" name="userEmail" placeholder="userEmail" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">User Password</th>
		                <td class="tdadd"><input type="text" name="userPass" placeholder="userPass" value="" /></td>
		            </tr>
			            <tr>
			                <td class="tdadd"><button type="submit">Insert Event</button></td>
			                <td class="tdadd"><a href="home.php"><button type="button">Back</button></a></td>
			            </tr>
			        </table>
			    </form>
			</fieldset>
		</div>
  	  </div>
  	 			 <p>
		            <a href="#">Back to top</a>
		        </p>
    
	    		
	    <footer class="fixed-bottom">
		   <p> &copy; Giava Ferrandina - CodeFactory 2018<p>
		        
		</footer>
		</div>
		

</body>
</html>