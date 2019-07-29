<?php

if(!isset($_POST['submit']) && !isset($_POST['firstname']) && !isset($_POST['lastname'])){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../create.php";
    header('Location:'.$url);
	session_unset();
	session_destroy();
}


$db = new mysqli('localhost','root','','testdb');
if($db->connect_error){
	die("Connection Error");
}

$f = $_POST['firstname'];
$l = $_POST['lastname'];

$sql = "insert into guests (firstname,lastname) values ('$f','$l')";


if($db->query($sql)){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
}else{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
}



?>