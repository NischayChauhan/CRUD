<?php
	session_start();
	session_unset();
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]/../index.php";
    header('Location:'.$url);
?>