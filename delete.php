<?php

if(!isset($_POST['submit'])){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
	session_unset();
	session_destroy();
}


$db = new mysqli('localhost','root','','testdb');
if($db->connect_error){
	die("Connection Error");
}

$id = $_GET['id'];

$sql = "delete from guests where id=$id";

$res = $db->query($sql);

$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url = str_replace("?id=".$id, "", $url);
$url = $url."/../index.php";
// echo $url;

if($db->query($sql)){
	$db->close();
    header('Location:'.$url);
}else{
    header('Location:'.$url);
}


?>