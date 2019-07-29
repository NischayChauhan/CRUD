
<?php
session_start();
if(!isset($_SESSION["verified"]) && $_SESSION["verified"]!=1){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
}
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


<div class="container">
	<div class="row">
		<form action="insert.php" method="POST">
		  <fieldset>
		    <legend>Add Data</legend>
		    <div class="form-group">
		      <label for="exampleInputEmail1">First Name</label>
		      <input type="text" name="firstname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
		    </div>
		    <div class="form-group">
		      <label for="exampleInputPassword1">Last Name</label>
		      <input type="password" name="lastname" class="form-control" id="exampleInputPassword1" placeholder="Password">
		    </div>
		    <div class="form-group">
		      <input type="submit" name="submit" value="submit" class="btn btn-primary">
		    </div>
		  </fieldset>
		</form>
	</div>
</div>


</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</html>

