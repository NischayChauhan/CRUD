
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="create.php">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Update</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Delete</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOUT</a>
      </li>
    </ul>
  </div>
</nav>


<?php 
	if(isset($_SESSION["verified"]) && $_SESSION["verified"]==1){
		$db = new mysqli('localhost','root','','testdb');
		if($db->connect_error){
			die("Connection Error");
		}

		$sql = "SELECT id, firstname, lastname, reg_date FROM guests";
		$result = $db->query($sql);
?>
<div class="container">
	<table class="table table-hover ">
	  <thead>
	    <tr>
	      <th scope="col">ID</th>
	      <th scope="col">UserName</th>
	      <th scope="col">LastNmae</th>
	      <th scope="col">Registration Date</th>
	      <th scope="col">Operation</th>
	      <th scope="col">Operation</th>
	    </tr>
	  </thead>
	  <tbody>
	  	<?php

			if ($result->num_rows > 0) {
			    while($row = $result->fetch_assoc()) {
			    	echo '<tr class="table-success context-menu-one">';
			    	echo '<td>'. $row["id"].'</td>';
			    	echo '<td>'. $row["firstname"].'</td>';
			    	echo '<td>'. $row["lastname"].'</td>';
			    	echo '<td>'. $row["reg_date"].'</td>';
			    	echo '<td><a href="edit.php?id='.$row["id"].'">Update</a></td>';
			    	echo '<td><a href="delete.php?id='.$row["id"].'">Delete</a></td>';
			    	echo '</tr>';
				}
			} else {
			    echo "0 results";
			}
			$db->close();
	  	?>
	   </tbody>
	</table>
</div>
<?php
	}
	else{
?>


<div class="container">
	<div class="row">
		<form action="checker.php" method="POST">
		  <fieldset>
		    <legend>LogIn</legend>
		    <div class="form-group">
		      <label for="exampleInputEmail1">Email address</label>
		      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    </div>
		    <div class="form-group">
		      <label for="exampleInputPassword1">Password</label>
		      <input type="text" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		    </div>
		    <div class="form-group">
		      <input type="submit" name="submit" value="submit" class="btn btn-primary">
		    </div>
		  </fieldset>
		</form>
	</div>
</div>
<?php 
	}
?>









</body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  	
  </script>
</html>

