<?php require('php/connection.php'); ?>
<?php
$var1 = $_POST['var1']; //  update score
$var2 = $_POST['var2']; // showWin
$var3 = $_POST['var3'];  //  timer
 if($var2==1)
    {
        // if the showWIn from javascript is 1 then update the win counter and score and timer
        $sql = "UPDATE scores set score='$var1' , Win= Win+1, showWin=1, Timer='$var3'  where scoreID=1";
        
    }
        // if the showWIn from javascript is  0  then just update the score and timer
    else if($var2==0)
    {
        
        $sql = "UPDATE scores  set score='$var1',  showWin=0, Timer='$var3' where scoreID=1";
    }
        $result = mysqli_query($link, $sql);
        
?>