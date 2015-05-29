<?php

/*
Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/

//for localhost
$link = mysqli_connect("localhost", "root", "secret", "wordplay_demo");

//for online
//$link = mysqli_connect("sql5.freesqldatabase.com", "sql575633", "cE1!fJ9*", "sql575633");
if ($link === false)
{
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
/*$conn = mysqli_connect("localhost", "root", "secret", "wordplay_demo");

// Check connection

if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
*/
?>