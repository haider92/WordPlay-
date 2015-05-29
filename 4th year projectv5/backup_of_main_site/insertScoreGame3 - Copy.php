<?php require('php/connection.php'); ?>
<?php
$var1 = $_POST['var1']; //  update score
$var2 = $_POST['var2']; // showWin
$var3 = $_POST['var3'];  //  timer
 if($var2==1)
    {
    
    
        $sql = "UPDATE scores set score='$var1' , Win= Win+1, showWin=1, Timer='$var3'  where scoreID=2";
        
    }
    else if($var2==0)
    {
        
        $sql = "UPDATE scores  set score='$var1',  showWin=0, Timer='$var3' where scoreID=2";
    }
        $result = mysqli_query($link, $sql);
        
?>