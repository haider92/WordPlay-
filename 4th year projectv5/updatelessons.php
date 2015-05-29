<?php require('header/header.php'); ?>
<body>
<!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">
            
            <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
            <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
               <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
              <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
              <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
               <li ><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>
            
        

            <!-- Dropdown-->
            <li class="active" class="panel panel-default" id="dropdown">
                <a data-toggle="collapse" href="#dropdown-lvl1">
                       <span class="glyphicon glyphicon-menu-down"></span> Admin <span class="caret"></span>
                </a>  
<?php require('header/dropdown1.php'); ?>

    <!-- Main Content -->
    <div class="container-fluid">
        <div class="side-body">
        <div id="header">

           <h1> WordPlay!</h1>
        </div>

<style>
.error {color: #FF0000;}
.worked {color: #004c00;}
</style>
<h2 align="center">Update lessons</h2>
<p align="center">Please check Show lessons table section for lessonID and lessonsen1ID's </p>    

<?php require('php/connection.php'); ?>
<?php
//include 'ChromePhp.php';
// this was used to debug php

define ("MAX_SIZE","1000");  
function getExtension($str) 
{ 
     $i = strrpos($str,"."); 
     if (!$i) { return ""; } 
     $l = strlen($str) - $i; 
     $ext = substr($str,$i+1,$l); 
     return $ext; 
} 
$imageerr = "";
$worked = "";

$lessonsen1ID = $lessonsen2ID = $lessonsen3ID = $lessonsen4ID = $lessonsen5ID = $lessonID  =  $heading  = $images = $sen1 = $sen2 = $sen3 = $sen4 = $sen5 =  $newname=  "";
$lessonsen1IDerr = $lessonsen2IDerr = $lessonsen3IDerr = $lessonsen4IDerr = $lessonsen5IDerr =$lessonIDerr= $sen1err = $sen2err =$sen3err =$sen4err =$sen5err = $headingerr = $sen1err = $missingerr = "";

// check if input box was filled or not if not throw an error
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{

  
     if (empty($_POST["lessonID"])) 
   {
     $lessonIDerr = "A lessonID is required";
   } 
   else 
   {
     $lessonID = mysqli_real_escape_string($link, $_POST['lessonID']);
   }
   if (empty($_POST["heading"]))
    {
       $headingerr = "A heading is required";
    }
    else
    {
         $heading = mysqli_real_escape_string($link, $_POST['heading']);
    }
    if (empty($_POST["lessonsen1ID"]))
    {
       $lessonsen1IDerr = "A lessonsen1ID is required";
    }
    else
    {
         $lessonsen1ID = mysqli_real_escape_string($link, $_POST['lessonsen1ID']);
    }
   if (empty($_POST["sen1"]))
    {
       $sen1err = "A sentence1 is required";
    }
    else
    {
         $sen1 = mysqli_real_escape_string($link, $_POST['sen1']);
    }

    if (empty($_POST["lessonsen2ID"]))
    {
       $lessonsen2IDerr = "A lessonsen2ID is required";
    }
    else
    {
         $lessonsen2ID = mysqli_real_escape_string($link, $_POST['lessonsen2ID']);
    }
    if (empty($_POST["sen2"]))
    {
       $sen2err = "A sentence2 is required";
    }
    else
    {
         $sen2 = mysqli_real_escape_string($link, $_POST['sen2']);
    }
    if (empty($_POST["lessonsen3ID"]))
    {
       $lessonsen3IDerr = "A lessonsen3ID is required";
    }
    else
    {
         $lessonsen3ID = mysqli_real_escape_string($link, $_POST['lessonsen3ID']);
    }
    if (empty($_POST["sen3"]))
    {
       $sen3err = "A sentence3 is required";
    }
    else
    {
         $sen3 = mysqli_real_escape_string($link, $_POST['sen3']);
    }
    if (empty($_POST["lessonsen4ID"]))
    {
       $lessonsen4IDerr = "A lessonsen4ID is required";
    }
    else
    {
         $lessonsen4ID = mysqli_real_escape_string($link, $_POST['lessonsen4ID']);
    }
    if (empty($_POST["sen4"]))
    {
       $sen4err = "A sentence4 is required";
    }
    else
    {
         $sen4 = mysqli_real_escape_string($link, $_POST['sen4']);
    }
     if (empty($_POST["lessonsen5ID"]))
    {
       $lessonsen5IDerr = "A lessonsen5ID is required";
    }
    else
    {
         $lessonsen5ID = mysqli_real_escape_string($link, $_POST['lessonsen5ID']);
    }
    if (empty($_POST["sen5"]))
    {
       $sen5err = "A sentence5 is required";
    }
    else
    {
         $sen5 = mysqli_real_escape_string($link, $_POST['sen5']);
    }
// check image was of right size and accpeted extensions if conditions not met then throw error
$image=$_FILES['image']['name'];   
   if ($image)  
    { 
        $filename = stripslashes($_FILES['image']['name']); 
        $extension = getExtension($filename); 
        $extension = strtolower($extension); 
    if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png")  
        && ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG")  
        && ($extension != "PNG") && ($extension != "GIF"))  
    { 
       
        $imageerr = "image is of Unknown extension!";
        
    } 
    else 
    { 
        $size=filesize($_FILES['image']['tmp_name']); 
  
        if ($size > MAX_SIZE*1024) 
        { 
            $imageerr = "You have exceeded the size limit!";
           
        } 
  
        $image_name=time().'.'.$extension; 
        $newname="images/".$image_name; 
  
        $copied = copy($_FILES['image']['tmp_name'], $newname);
       
    
             if (!$copied)  
        { 
            
             $imageerr = "Failed to copy image!";
        
        } 
       
    } 
  }
  else
  {
    $imageerr = "A image is required";
 }

    if ($lessonID != ""  && $lessonsen1ID != "" && $lessonsen2ID != "" && $lessonsen3ID != "" && $lessonsen4ID != "" && $lessonsen5ID != "" && $sen1 !=""&& $sen2 !=""&& $sen3 !=""&& $sen4 !=""&& $sen5 !="" && $imageerr=="" )
    {
        // delete old image from images folder
        $sqlimage = "SELECT * FROM  Lessons  WHERE LessonID='$lessonID';";
        $imageresult = mysqli_query($link, $sqlimage);
        $row=mysqli_fetch_array($imageresult, MYSQLI_ASSOC);
        @unlink($row["images"]);
            // execute update query
          $sql1 = "UPDATE lessons SET heading='$heading', images='".$newname."' WHERE lessonID='$lessonID';";
          mysqli_query($link, $sql1);
          $sql = "UPDATE lessonsen SET sen='$sen1' WHERE lessonID='$lessonID' AND lessonsenID =  '$lessonsen1ID';";
          $sql .= " UPDATE lessonsen SET sen='$sen2' WHERE lessonID='$lessonID' AND lessonsenID =  '$lessonsen2ID';";
          $sql .= " UPDATE lessonsen SET sen='$sen3' WHERE lessonID='$lessonID' AND lessonsenID =  '$lessonsen3ID';";
          $sql .= " UPDATE lessonsen SET sen='$sen4' WHERE lessonID='$lessonID' AND lessonsenID =  '$lessonsen4ID';";
          $sql .= " UPDATE lessonsen SET sen='$sen5' WHERE lessonID='$lessonID' AND lessonsenID =  '$lessonsen5ID';";
          $result =  mysqli_multi_query($link, $sql);
           $worked = "Operation successful!";
          
       if($result) 
       
       {
            do
            {
                // grab the result of the next query
                if (($result = mysqli_store_result($link)) === false && mysqli_error($link) != '') 
                {
                    echo "Query failed: " . mysqli_error($link);
                }
            } 
            while (mysqli_more_results($link) && mysqli_next_result($link)); // while there are more results
        }
 else 
        {
            echo "First query failed..." . mysqli_error($link);
        }        
       
    }
    else
    {
       $missingerr = "Missing required inputs";
    }
    
// close connection
mysqli_close($link);



}

?>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  enctype="multipart/form-data" >
    <p>
        <label for="lessonID">Input the lessonID you wish to have updated: </label>
        <input type="text" name="lessonID" id="lessonID">
         <span class="error">* <?php echo $lessonIDerr ?></span>
    </p>
    <p>
        <label for="heading">Input the heading for the lesson you wish to have updated: </label>
        <input type="text" name="heading" id="heading">
        <span class="error">* <?php echo $headingerr ?></span>
       
    </p>
    <p>
        <label for="lessonsen1ID">Input the lessonsen1ID you wish to have updated: </label>
        <input type="text" name="lessonsen1ID" id="lessonsen1ID">
        <span class="error">* <?php echo $lessonsen1IDerr ?></span>
       
    </p>
    <p>
        <label for="sen1">Input the first sentence you wish to have updated: </label>
        <input type="text" name="sen1" id="sen1">
        <span class="error">* <?php echo $sen1err ?></span>
       
    </p>
     <p>
        <label for="lessonsen2ID">Input the lessonsen2ID you wish to have updated: </label>
        <input type="text" name="lessonsen2ID" id="lessonsen2ID">
        <span class="error">* <?php echo $lessonsen2IDerr ?></span>
       
    </p>
     <p>
        <label for="sen2">Input the second sentence you wish to have updated: </label>
        <input type="text" name="sen2" id="sen2">
        <span class="error">* <?php echo $sen2err ?></span>
       
    </p>
     <p>
        <label for="lessonsen3ID">Input the lessonsen3ID you wish to have updated: </label>
        <input type="text" name="lessonsen3ID" id="lessonsen3ID">
        <span class="error">* <?php echo $lessonsen3IDerr ?></span>
       
    </p>
    <p>
        <label for="sen3">Input the third sentence you wish to have updated: </label>
        <input type="text" name="sen3" id="sen3">
        <span class="error">* <?php echo $sen3err ?></span>
       
    </p>
    <p>
        <label for="lessonsen4ID">Input the lessonsen4ID you wish to have updated: </label>
        <input type="text" name="lessonsen4ID" id="lessonsen4ID">
        <span class="error">* <?php echo $lessonsen4IDerr ?></span>
       
    </p>
    <p>
        <label for="sen4">Input the fourth sentence you wish to have updated: </label>
        <input type="text" name="sen4" id="sen4">
        <span class="error">* <?php echo $sen4err ?></span>
       
    </p>
    <p>
        <label for="lessonsen5ID">Input the lessonsen5ID you wish to have updated: </label>
        <input type="text" name="lessonsen5ID" id="lessonsen5ID">
        <span class="error">* <?php echo $lessonsen5IDerr ?></span>
       
    </p>
    <p>
        <label for="sen5">Input the fifth sentence you wish to have updated: </label>
        <input type="text" name="sen5" id="sen5">
        <span class="error">* <?php echo $sen5err ?></span>
       
    </p>
    <p> 
    <input type="file" name="image" id="image" size="40">
    <span class="error">* <?php echo $imageerr ?></span>
    </p>
    <input type="submit" value="Update lesson">
    <br>
    <br>

     <span class="error"><?php echo $missingerr ?></span>
          <span class="worked"><?php
echo $worked ?></span>
</form>

        </div>
    </div>
</div>

   

</body>

</html>
