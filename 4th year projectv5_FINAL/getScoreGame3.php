<?php require('php/connection.php'); ?>
<?php
    $sql = "SELECT * FROM scores where scoreID=2";
	$result = mysqli_query($link, $sql);
	$array_user = array();
	while($data = mysqli_fetch_assoc($result)){
       
		$array_user[] = $data;

	}
    
	echo json_encode($array_user);
	
?>