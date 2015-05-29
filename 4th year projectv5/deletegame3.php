<?php
require ('header/header.php');
 ?>
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
<?php
require ('header/dropdown1.php');
 ?>

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
<h2 align="center">Delete Question from making sentences game</h2>  
<?php require('php/connection.php'); ?>
<?php

define("MAX_SIZE", "1000");

function getExtension($str)
{
	$i = strrpos($str, ".");
	if (!$i)
	{
		return "";
	}

	$l = strlen($str) - $i;
	$ext = substr($str, $i + 1, $l);
	return $ext;
}

$imageerr = "";
$game3ID = "";
$game3IDerr = $missingerr = "";
$worked = "";

// check if input box was filled or not if not throw an error
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["game3ID"]))
	{
		$game3IDerr = "A game3ID is required";
	}
	else
	{
		$game3ID = mysqli_real_escape_string($link, $_POST['game3ID']);
	}

	if ($game3ID != "")

	// attempt DELETE query execution

	{
		$sql = "DELETE FROM  game3  WHERE game3ID='$game3ID';";
		$sql.= "ALTER TABLE game3 DROP game3ID;";
		$sql.= " ALTER TABLE game3 ADD game3ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST;";
		$result = mysqli_multi_query($link, $sql);
        $worked = "Operation successful!";
		if ($result)
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
<form method="post" action="<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  enctype="multipart/form-data" >
    <p>
        <label for="game3ID"> What row do you want deleted in the making sentence game: </label>
        <input type="text" name="game3ID" id="game3ID">
         <span class="error">* <?php
echo $game3IDerr ?></span>
    </p>
    <input type="submit" value="Delete Question">
    <br />

     <span class="error"><?php
echo $missingerr ?></span>
 <span class="worked"><?php
echo $worked ?></span>
</form>

        </div>
    </div>
</div>

   

</body>

</html>
