<?php

$hostName= "localhost";
$userName= "root";
$password = "root";

$db_name = "ems";

$conn = mysqli_connect($hostName, $userName, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
else{
    echo "connection sucessfull";
}