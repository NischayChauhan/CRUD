<?php


if(!isset($_POST['submit'])){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
	header("Location: http://localhost/prj/raw");
	session_unset();
	session_destroy();
}

if($_POST['username']=="nischay" && $_POST['password']=="1234"){
	session_start();
	$_SESSION["verified"]=1;
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
}else{
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
}
?>