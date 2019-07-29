<?php

if(!isset($_POST['submit']) && !isset($_POST['firstname']) && !isset($_POST['lastname'])){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
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
$id = $_GET['id'];

$sql = "update guests set firstname='$f',lastname='$l' where id=$id";
echo $sql;

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