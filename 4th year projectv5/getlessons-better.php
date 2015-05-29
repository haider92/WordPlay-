<?php
require ('php/connection.php');
 ?>
<?php

$var1 = $_POST['var1']; // whichlesson


// check which lesson it is and select the information the database

if ($var1 == 1)
{
	$sql = "SELECT ls. sen,  l . heading, images  FROM lessonsen ls, lessons l WHERE ls.lessonID =1 AND l.lessonID = 1";
}

if ($var1 == 2)
{
	$sql = "SELECT ls. sen,  l . heading, images  FROM lessonsen ls, lessons l WHERE ls.lessonID =2 AND l.lessonID = 2";
}

if ($var1 == 3)
{
	$sql = "SELECT ls. sen,  l . heading, images  FROM lessonsen ls, lessons l WHERE ls.lessonID =3 AND l.lessonID = 3";
}

$result = mysqli_query($link, $sql);
$array_user = array();

while ($data = mysqli_fetch_assoc($result))
{
	$array_user[] = $data;
}

echo json_encode($array_user);


?>