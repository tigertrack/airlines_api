<?php


date_default_timezone_set("Asia/Jakarta");


$server		= 'localhost';
$username	= 'root';
$password	= '';
$database	= 'airline2';

$con 		= mysqli_connect($server, $username, $password, $database) or die("Connection failed!");

?> 