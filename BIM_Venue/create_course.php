<!DOCTYPE html>
<html>
<head>

    <title>Add Course</title>
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
			    <legend>Add Course</legend>
			    
			    <form action="actions/a_create_course.php" method="post">
			        <table>
			            <tr>
		                <th class="thcreate">Name</th>
		                <td class="tdadd"><input type="text" name="cName" placeholder="cName" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">Begin</th>
		                <td class="tdadd"><input type="text" name="cBegin" placeholder="cBegin" value="" /></td>
		            </tr> 
		            <tr>
		                <th class="thcreate">End</th>
		                <td class="tdadd"><input type="text" name="cEnd" placeholder="cEnd" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Details</th>
		                <td class="tdadd"><input type="text" name="cDetails" placeholder="cDetails" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Schedule</th>
		                <td class="tdadd"><input type="text" name="cSchedule" placeholder="cSchedule" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Description</th>
		                <td class="tdadd"><input type="text" name="cDescription" placeholder="cDescription" value="" /></td>
		            </tr>
		            <tr>
		                <th class="thcreate">Price</th>
		                <td class="tdadd"><input type="text" name="cPrice" placeholder="cPrice" value="" /></td>
		            </tr>

		             <tr>
		                <th class="thcreate">Capacity</th>
		                <td class="tdadd"><input type="text" name="capacity" placeholder="capacity" value="" /></td>
		            </tr>
			            <tr>
			                <td class="tdadd"><button type="submit">Insert Course</button></td>
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