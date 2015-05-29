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
</style>
<h2 align="center">Insert Question Into making sentences game</h2>  

<?php require('php/connection.php'); ?>

<?php

// include 'ChromePhp.php';


$question = $textbox1 = $sentencefrag1 = $textbox2 = $sentencefrag2 = $textbox3 = "";
$questionerr = $textbox1err = $sentencefrag1err = $textbox2err = $sentencefrag2err = $textbox3err = $missingerr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["question"]))
	{
		$questionerr = "A question is required";
	}
	else
	{
		$question = mysqli_real_escape_string($link, $_POST['question']);
	}

	if (empty($_POST["textbox1"]))
	{
		$textbox1err = "A textbox1 is required";
	}
	else
	{
		$textbox1 = mysqli_real_escape_string($link, $_POST['textbox1']);
	}

	if (empty($_POST["sentencefrag1"]))
	{
		$sentencefrag1err = "A sentencefrag1 is required";
	}
	else
	{
		$sentencefrag1 = mysqli_real_escape_string($link, $_POST['sentencefrag1']);
	}

	if (empty($_POST["textbox2"]))
	{
		$textbox2err = "A textbox2 is required";
	}
	else
	{
		$textbox2 = mysqli_real_escape_string($link, $_POST['textbox2']);
	}

	if (empty($_POST["sentencefrag2"]))
	{
		$sentencefrag2err = "A sentencefrag2 is required";
	}
	else
	{
		$sentencefrag2 = mysqli_real_escape_string($link, $_POST['sentencefrag2']);
	}

	if (empty($_POST["textbox3"]))
	{
		$textbox3err = "A textbox3 is required";
	}
	else
	{
		$textbox3 = mysqli_real_escape_string($link, $_POST['textbox3']);
	}

	if ($question != "" && $textbox1 != "" && $sentencefrag1 != "" && $textbox2 != "" && $sentencefrag2 != "" && $textbox3 != "")

	// attempt insert query execution

	{ //ChromePhp::log('inserting!!!!!!!');
		$sql = "INSERT INTO game3 (question, textbox1, sentencefrag1,textbox2,sentencefrag2, textbox3) VALUES ('$question', '$textbox1', '$sentencefrag1', '$textbox2', '$sentencefrag2','$textbox3');";
		$result = mysqli_query($link, $sql);
	}
	else
	{
		$missingerr = "Missing required inputs";
	}

	mysqli_close($link);
}

?>
<p><span class="error">* required field.</span></p>
<form method="post" action="<?php
echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  enctype="multipart/form-data" >
    <p>
        <label for="question">Input a Question that will inserted into the database for making sentences game:</label>
        <input type="text" name="question" id="question">
         <span class="error">* <?php
echo $questionerr ?></span>
    </p>
    <p>
        <label for="textbox1">Input a word into textbox1:</label>
        <input type="text" name="textbox1">
         <span class="error">* <?php
echo $textbox1err ?></span>
    </p>
       <p>
        <label for="sentencefrag1">Input a sentence fragment 1 of the sentence:</label>
        <input type="text" name="sentencefrag1" >
         <span class="error">* <?php
echo $sentencefrag1err ?></span>
    </p>
     <p>
        <label for="textbox2">Input a word into textbox2:</label>
        <input type="text" name="textbox2" >
         <span class="error">* <?php
echo $textbox2err ?></span>
    </p>
      <p>
        <label for="sentencefrag2">Input a sentence fragment 2 of the sentence:</label>
        <input type="text" name="sentencefrag2">
         <span class="error">* <?php
echo $sentencefrag2err ?></span>
    </p>
    <p>
        <label for="textbox3">Input a word into textbox3:</label>
        <input type="text" name="textbox3">
         <span class="error">* <?php
echo $textbox3err ?></span>
    </p>
    <input type="submit" value="Add Question">
    <br />
    <br />

     <span class="error"><?php
echo $missingerr ?></span>
</form>
           
			
          
        </div>
    </div>
</div>

   

</body>

</html>