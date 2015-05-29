<?php require('php/connection.php'); ?>
<?php
$var1 = $_POST['var1']; // select whichgame
    
    //the aim of this is get the how many questions are inserted into the database table then return that so we can choose which question to choose
    if($var1 ==1)
    {
    
    
	$sql = "SELECT MAX(game1ID) AS maxrow FROM game1";
    }
    if($var1 ==2)
    {
    
    
	$sql = "SELECT MAX(game2ID) AS maxrow FROM game2";
    }
    if($var1 ==3)
    {
    
    
	$sql = "SELECT MAX(game3ID) AS maxrow FROM game3";
    }
    
	$result = mysqli_query($link, $sql);
	$array_user = array();
	while($data = mysqli_fetch_assoc($result)){
       
		$array_user[] = $data;
	}
	echo json_encode($array_user);
?>