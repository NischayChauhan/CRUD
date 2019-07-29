<?php


$db = new mysqli('localhost','root','','testdb');
if($db->connect_error){
	die("Connection Error");
}


// $sql = "Create table guests ( 
// 	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
// 	firstname VARCHAR(30) NOT NULL,
// 	lastname VARCHAR(30) NOT NULL,
// 	reg_date TIMESTAMP
// )";

// if($db->query($sql)){
// 	echo "SUCCESS";
// }else{
// 	echo "FAILED";
// }



$sql = "insert into guests (firstname,lastname) values ('nischay','chauhan')";


if($db->query($sql)){
	echo "SUCCESS";
}else{
	echo "FAILED";
}


