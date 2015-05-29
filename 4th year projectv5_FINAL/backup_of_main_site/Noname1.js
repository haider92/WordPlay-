Spot the Picture game (game1.php)
<script>  // all variables for game1 spot the picture  
                        var clock;  
                        var startclock = 0;  
                        var set = 0;  
                        var score = 0;  
                        var attempt = 0;  
                        var limit = 0;  
                        var start = 0;  
                        var get = 0;  
                        var showWin = 0;  
                        var clicks = 1;  
                        var startofgame1 = 0;  
                        var getint = 0;  
                        var maxrow;  
                        var test;  
                        var selectgame1 = 1;  
// when document is ready to process  
                        $(document).on("ready", function() {  
                            // the menu is shown to the user and the user not started hide all game divs  
                            if(startofgame1 == 0) {  
                                $("#drag1").hide();  
                                $("#drag2").hide();  
                                $("#drag3").hide();  
                                $("#drag4").hide();  
                                $("#dropbox").hide();  
                                $("#dropbox").hide();  
                                $(".count").hide();  
                                $("#score").hide();  
                                $(".progressbararea").hide();  
                            }  
                            //at the start of the game load the previous score  
                            if(get == 0) {  
                                getPreviousScore();  
                                get++;  
                            }  $('#followbtn').on('click', function(e) {  
                                startofgame1 = 1;  
                                if(startofgame1 == 1) {  
                                    $("#drag1").fadeIn();  
                                    $("#drag2").fadeIn();  
                                    $("#drag3").fadeIn();  
                                    $("#drag4").fadeIn();  
                                    $("#dropbox").fadeIn();  
                                    $(".count").fadeIn();  
                                    $("#score").fadeIn();  
                                    $(".progressbararea").fadeIn();  
                                    $("#startofgame1").hide();  
  
                                } 
// this is for the flipclock.js so if its the start of the game start the clock otherwise skip.  
                                $(document).ready(function() {  
                                    if(startclock == 0) {  
                                        clock = $('.clock').FlipClock(500, {  
                                            clockFace: 'MinuteCounter',  
                                            autoStart: true,  
                                            countdown: true,  
                                            callbacks: {  
                                                stop: function() {  
                                                    window.location = "game1_final.php ";  
                                                }  
                                            }  
                                        });  
                                        startclock++;  
                                    }  
                                });  
                                limit++; 
// if the max limit of questions is reached check the last highest score was lower than the current score and showWin = 1 means you won otherwise you lose    
                                if(limit == 5) {  
                                    if(oldscore < score) {  
                                        console.log("last highest score was less you win");  
                                        showWin = 1;  
                                        insertScoreAndWinValue(score, showWin);  
                                    } else if(oldscore > score) {  
                                        console.log("last highest score is more you lose");  
                                        showWin = 0;  
                                        insertScoreAndWinValue(score, showWin);  
                                    }  
                                    window.location = "game1_final.php";  
                                }  
// when next is clicked reset the attempt to 0   
                                attempt = 0;  
                                //remove data from drag and dropbox divs  
                                $("#drag1").empty();  
                                $("#drag2").empty();  
                                $("#drag3").empty();  
                                $("#drag4").empty();  
                                $("#content").empty();  
                                e.preventDefault();  
                                // reset the dropbox color to grey  
                                if(set >= 1) {  
$("#dropbox").removeClass("incorrect")  
                                    $("#dropbox").removeClass("correct")  
                                    $("#dropbox").find("p")  
                                    $("#dropbox").html("Drop me here");  
                                }  
                                // move all draggables to the orginial position  
                                $("#drag1").animate({  
                                    top: "0px",  
                                    left: "0px"  
                                });  
                                $("#drag2").animate({  
                                    top: "0px",  
                                    left: "0px"  
                                });  
                                $("#drag3").animate({  
                                    top: "0px",  
                                    left: "0px"  
                                });  
                                $("#drag4").animate({  
                                    top: "0px",  
                                    left: "0px"  
                                });  
 // call get getMaxRowThenSelect to get the maximum number of rows and then select the rows in the database to start game1 spot the picture  
                                getMaxRowThenSelect();  
                    </script>  
                    <script>  
// ajax is used here ajax calls a php file which in turn queries the sql database  
 // this code attempts to calculate the total number of max rows in the game1 sql table and returns a value and then the number is randomised  
                        var getMaxRowThenSelect;  
                        getMaxRowThenSelect = function() {  
                            $.ajax({  
                                type: "POST",  
                                url: "getmaxrowsgame1.php",  
                                data: {  
                                    var1: selectgame1  
                                }  
                            }).done(function(data) {  
                                users = JSON.parse(data);  
                                for(var i in users) {  
 		 maxrow = (users[i].maxrow);  
                                    test = parseInt(Math.floor(Math.random() * maxrow + 1));  
                                }  
   //using the random number call the selectRowForGame method to select it from the database  
                                selectRowsForGame()  
                            });  
                        }  
                        var users;  
                        var i;  
                        var loadData;  
                        var result;  
                        var imageref;  
                        var answer1;  
                        var answer2;  
                        var answer3;  
                        var answer4;  
   //using the random number call the selectRowsForGame method to select it from the database  
                        function selectRowsForGame() {  
                                $.ajax({  
                                    type: "POST",  
                                    url: "game1_select.php",  
                                    data: {  
                                        var1: test  
                                    }  
                                }).done(function(data) {  
                                   // console.log(data); //this is working  
                                    users = JSON.parse(data);  
 // go through the database row and place the data from the row in some places in html and in vars
                                    for(var i in users) {  
                                        $("#content").append("      " + clicks++ + "." + " " + users[i].question + "<br>");  
                                        $("#drag1").append(users[i].answer1 + " " + "<br>");  
                                        answer1 = (users[i].answer1);  
                                        $("#drag2").append(users[i].answer2 + " " + "<br>");  
                                        answer2 = (users[i].answer2);  
                                        $("#drag3").append(users[i].answer3 + " " + "<br>");  
                                        answer3 = (users[i].answer3);  
                                        $("#drag4").append(users[i].answer4 + " " + "<br>");  
                                        answer4 = (users[i].answer4);  
  
                                        result = (users[i].correct);  
                                        imageref = (users[i].images);
    
                                    }  
// display image method correctly  
                                    (function printMsg() {  
                                        var node = document.getElementById("picture");  
  
                                        node.innerHTML = "<img id='picture' src=\"" + imageref + "\">";  
  
                                    })();  
  
                                });  
                            }  
                    </script>  
                    <script> 
   //when called it inserts the current score and win value for the current game showWin=0 means lose and showWin=1 means a win  
                        var insertScoreAndWinValue;  
                        insertScoreAndWinValue = function(score, showWin) {  
                            $.ajax({  
                                type: "POST",  
                                url: "insertScoreGame1.php",  
                                data: {  
                                    var1: score,  
                                    var2: showWin  
                                }  
                            }).done(function(data) {  
                            });  
                        }  
                    </script>  
                    <script>  
                        //when called gets the previous score from the last session  
                        var oldscore;  
                        var getPreviousScore;  
                        getPreviousScore = function() {  
                            $.ajax({  
                                type: "GET",  
                                url: "getScoreGame1.php",  
                            }).done(function(data) {  
                              //  console.log(data + "daaaaaaaaattttttttttttaaaaaaaaaa"); //this is working  
                                users = JSON.parse(data);  
                                for(var i in users) {  
                                    oldscore = (users[i].score);  
                                    //console.log("wyhhhhhhhhhhhhhat was score         " + oldscore);  
                                }  
                            });  
                        }  
                    </script>  
                    <script>  
  // scorei = scoreincrements checks the attempt of the user and increments the score value and then calls the countup function which displays that in html  
                        function scorei(attempt) {  
                            if(attempt == 0) {  
                                score = score + 3;  
                           //     console.log(score);  
                                countUp(score);  
                            } else if(attempt == 1) {  
                                score = score + 2;  
                                countUp(score);  
                            } else if(attempt > 1) {  
                                score++;  
                                countUp(score);     
                            }  
                        }  
                    </script>  
                    <script>  
 // gets the score value from scorei and increments it in the html  
                        function countUp(count) {  
  
                            $display = $('.count'),  
                                int = setInterval(function() {  
                                    if(parseInt($display.text()) < count) {  
                                        var curr_count = parseInt($display.text()) + 1;  
                                        $display.text(curr_count);  
                                    }  
                                }, null);  
                        }  
                    </script>  
                    <script>  
 // these are the conditions for when a draggable in the game1 should revert  
                        $(function() {  
                            var shouldRevert = function(droppable) { 
//function to see if a question box should revert to its original location  
                                if(droppable == false) { //if box is not the target area, it should revert.  
                                    return true  
                                } else if($(this).attr('id') == result) { 
//if the correct answer is dropped to the target area, it should not revert.  
                                    return false  
                                } else { //all other cases it should revert.  
                                    return true  
                                }  
                            }    //setup the draggables and dropbox  
                            $("#drag1").draggable({  
                                revert: shouldRevert  
                            });  
                            $("#drag2").draggable({  
                                revert: shouldRevert  
                            });  
                            $("#drag3").draggable({  
                                revert: shouldRevert  
                            });  
                            $("#drag4").draggable({  
                                revert: shouldRevert  
                            });  
  
                            $("#dropbox").droppable({  
  
                                activeClass: "ui-state-default",  
                                hoverClass: "ui-state-hover",  
  		   drop: function(event, ui) {  
                                    if(ui.draggable.attr('id') == result) { //if the "correct" element is true, then this droppable is the right answer  
                                        $(this)  
                                            .removeClass("incorrect")  
                                            .removeClass("incorrect")  
                                            .addClass("correct") //If the answer if the correct one, add a new class called "correct" 
                                        $("#dropbox").find("p")  
                                        $("#dropbox").html("correct!"); //print to droppable box  
                                        set++;  
                                        scorei(attempt); 
                                    } else //if the "correct" element is false, then this droppable is the wrong answer  
                                    {  
                                        $(this)  
                                            .removeClass("correct")  
                                            .addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.  
                                        $("#dropbox").find("p") //finds a <p> tag for writing to the target box  
                                        $("#dropbox").html("incorrect"); //print to droppable box  
                                        set++; // set is for reseting the dropbox color if it is set or greater than 1 then when the user clicks next it will turn grey  for the next question                      
  
                                        if(attempt < 3) // if attempt is lessthan 3 then increament attempt  
                                        {  
                                            attempt++;  
  
                                        }  
                                    }  
                                }  
                            });  
                        });  
                    </script>          
End of Game1  (game1_final.php)      
<script>  
                        var Win;  
                        var score;  
                        var oldscore;  
                        var loadData3;  
                        var loadData2;  
                        var showWin = 0;  
                        $(document).on("ready", function() {  
                              // get scores and win data from game1  
                            loadData3();  
                            // if the current score is bigger than than the last high score update new highest score  
                            if(score > oldscore) {  
                                loadData2(score);  
                            }  
                            // if you didnt win dont show throphy  
                            if(showWin == 0) {  
                                $("#scoreresultwin").hide();  
                                $(".countresult3").hide();  
                            } 
                        });  
                    </script>  
                    <script>  
                        // get scores and win data from game1  
                        loadData3 = function() {  
                                $.ajax({  
                                    async: false,  
                                    cache: false,  
                                    type: "GET",  
                                    url: "getScoreGame1.php",  
                                }).done(function(data) {  
                                    //console.log(data + "daaaaaaaaattttttttttttaaaaaaaaaa"); //this is working  
                                    users = JSON.parse(data);  
                                    // the data from the sql database row in the correct html div  
                                    for(var i in users) {
       $(".countresult").append(users[i].score);  
                                        score = (users[i].score);  
                                        $(".countresult2").append(users[i].oldscore);  
                                        oldscore = (users[i].oldscore);  
                                        $(".countresult3").append(users[i].Win);  
                                        Win = (users[i].Win);  
                                        showWin = (users[i].showWin); 
                                    }  
                                });  
  	 }  
                    </script>  
                    <script>  
                        // update new highest score  
                        loadData2 = function(score) {  
                            $.ajax({  
                                async: false,  
                                cache: false,  
                                type: "POST",  
                                url: "insertScoreGame1newhighscore.php",  
                                data: {  
                                    var1: score  
                                }  
                            }).done(function(data) {  
                            });  
                        }  
                    </script>  
Update Game1 database with user input  (updategame1.php)
  
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
<h2 align="center">Update Question in Spot the picture game</h2>    
<?php  >  
/* 
Attempt MySQL server connection. Assuming you are running MySQL 
server with default setting (user 'root' with no password) 
*/  
$link = mysqli_connect("localhost", "root", "secret", "wordplay_demo");  
  
// Check connection  
  
if ($link === false)  
{  
    die("ERROR: Could not connect. " . mysqli_connect_error());  
}  
// check file is an image and not too big for server  
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
// for image error  
$imageerr = "";  
// set up everything and the errors to be shown as well  
$game1ID = $question = $answer1 = $answer2 = $answer3 = $answer4 = $correct = $newname = "";  
$game1IDerr = $questionerr = $answer1err = $answer2err = $answer3err = $answer4err = $correcterr = $missingerr = "";  
  
// so when user hits submit check that the field is full with data or fail the request ALL data must be filled in  
if ($_SERVER["REQUEST_METHOD"] == "POST")  
{  
    if (empty($_POST["game1ID"]))  
    {  
        $game1IDerr = "A game1ID is required";  
    }  
    else  
    {  
        $game1ID = mysqli_real_escape_string($link, $_POST['game1ID']);  
    }  
  
    if (empty($_POST["question"]))  
    {  
        $questionerr = "A question is required";  
    }  
    else  
    {  
        $question = mysqli_real_escape_string($link, $_POST['question']);  
    }  
  
    if (empty($_POST["answer1"]))  
    {  
        $answer1err = "A answer1 is required";  
    }  
    else  
    {  
        $answer1 = mysqli_real_escape_string($link, $_POST['answer1']);  
    }  
  
    if (empty($_POST["answer2"]))  
    {  
        $answer2err = "A answer2 is required";  
    }  
    else  
    {  
        $answer2 = mysqli_real_escape_string($link, $_POST['answer2']);  
    }  
  
    if (empty($_POST["answer3"]))  
    {  
        $answer3err = "A answer3 is required";  
    }  
    else  
    {  
        $answer3 = mysqli_real_escape_string($link, $_POST['answer3']);  
    }  
  
    if (empty($_POST["answer4"]))  
    {  
        $answer4err = "A answer4 is required";  
    }  
    else  
    {  
        $answer4 = mysqli_real_escape_string($link, $_POST['answer4']);  
    }  
  
    if (empty($_POST["correct"]))  
    {  
        $correcterr = "A correct is required";  
    }  
    else  
    {  
        $correct = mysqli_real_escape_string($link, $_POST['correct']);  
    }  
    // error checking will be removed later  
    // ChromePhp::log('outside');  
   // grab the image  
    $image = $_FILES['image']['name'];  
    // if the image is set procress it check if it is not too big and correct format eg jpg etc  
    if ($image)  
    {  
        $filename = stripslashes($_FILES['image']['name']);  
        $extension = getExtension($filename);  
        $extension = strtolower($extension);  
        if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "JPG") && ($extension != "JPEG") && ($extension != "PNG") && ($extension != "GIF"))  
        {  
            $imageerr = "image is of Unknown extension!"; 
        }  
        else  
        {  
            $size = filesize($_FILES['image']['tmp_name']);  
            if ($size > MAX_SIZE * 1024)  
            {  
                echo '<h4>You have exceeded the size limit!</h4>';  
  
            }  
            // if the image has no problems then copy it and place it in the images directory  
            $image_name = time() . '.' . $extension;  
            $newname = "images/" . $image_name;  
            $copied = copy($_FILES['image']['tmp_name'], $newname);  
            // check to see copy worked or not  
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
    // check if everything is set and check there is no problem with the image then attempt query execution  
    if ($question != "" && $answer1 != "" && $answer2 != "" && $answer3 != "" && $answer4 != "" && $correct != "" && $imageerr == "" && $game1ID != "")  
    {  
       // when we are updated we want to remove the old image from the images folder so this does that  
        $sqlimage = "SELECT * FROM  game1  WHERE game1ID='$game1ID';";  
        $imageresult = mysqli_query($link, $sqlimage);  
        $row = mysqli_fetch_array($imageresult, MYSQLI_ASSOC);  
        @unlink($row["images"]);  
        // then we update the information  
        $sql = "UPDATE game1 SET game1ID='$game1ID', question='$question', answer1='$answer1',answer2='$answer2', answer3='$answer3', answer4='$answer4', correct='$correct',images='" . $newname . "' WHERE game1ID='$game1ID';";  
  
        $result = mysqli_query($link, $sql);  
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>" enctype="multipart/form-data">  
    <p>  
        <label for="game1ID"> What row do you want updated in the spot the picture game:</label>  
        <input type="text" name="game1ID" id="game1ID">  
        <span class="error">* <?php echo $game1IDerr ?></span>  
    </p>  
    <p>  
        <label for="question">Input a Question that will updated into the database for spot the picture game:</label>  
        <input type="text" name="question" id="question">  
        <span class="error">* <?php echo $questionerr ?></span>  
    </p>  
    <p>  
        <label for="answer1">Possible Answer 1: </label>  
        <input type="text" name="answer1" id="answer1">  
        <span class="error">* <?php echo $answer1err ?></span>  
    </p>  
    <p>  
        <label for="answer2">Possible Answer 2: </label>  
        <input type="text" name="answer2" id="answer2">  
        <span class="error">* <?php echo $answer2err ?></span>  
    </p>  
    <p>  
        <label for="answer3">Possible Answer 3: </label>  
        <input type="text" name="answer3" id="answer3">  
        <span class="error">* <?php echo $answer3err ?></span>  
    </p>  
    <p>  
        <label for="answer4">Possible Answer 4:</label>  
        <input type="text" name="answer4" id="answer4">  
        <span class="error">* <?php echo $answer4err ?></span>  
    </p>  
    <p>  
        <label for="correct">Which draggable is the correct one eg drag1, drag2, drag3, drag4:</label>  
        <input type="text" name="correct" id="correct">  
        <span class="error">* <?php echo $correcterr ?></span>  
    </p>  
    <p>  
        <input type="file" name="image" id="image" size="40">  
        <span class="error">* <?php echo $imageerr ?></span>  
    </p>  
    <input type="submit" value="Update Question">  
    <br>  
    <br>  
    <span class="error"><?php echo $missingerr ?></span>  
</form>  
</div>  
</div>  
</div>  
</body>  
</html>  
Whiteboard page (whiteboard.php)
  <?php require( 'header/header.php'); ?>  
 <!-- Main Menu -->  
<div class="side-menu-container">  
    <ul class="nav navbar-nav">  
  <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>  
        <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>  
        <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>  
        <li class="active"><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>  
        <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>  
        <li><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>  
  <!-- Dropdown-->  
        <li class="panel panel-default" id="dropdown">  
            <a data-toggle="collapse" href="#dropdown-lvl1">  
                <span class="glyphicon glyphicon-menu-down"></span> Admin <span class="caret"></span>  
            </a>
<?php require( 'header/dropdown1.php'); ?>  
            <!--style of whiteboard-->  
            <style data-example="3">  
                @media only screen and (min-width: 801px) {  
                    #custom-board-2 {  
                        width: 700px;  
                        height: 550px;  
                        margin: 0 auto;  
                    }  
                }    @media only screen and (min-width: 0px) and (max-width: 800px) {  
                    #custom-board-2 {  
                        width: 300px;  
                        height: 300px;  
                        margin: 0 auto;  
                    }  
                }  
            </style>
 <!-- Main Content -->  
            <div class="container-fluid">  
                <div class="side-body">  
                    <div id="header">  
                        <h1> WordPlay!</h1>  
                    </div>
 <div class="example" data-example="3">  
                        <h1 align="center">Whiteboard</h1>  
                        <div class="board" id="custom-board-2"></div>  
                    </div>  
                    <script src="boardjs/utils.js"></script>  
                    <script src="boardjs/board.js"></script>  
                    <script src="boardjs/controls/control.js"></script>  
                    <script src="boardjs/controls/color.js"></script>  
                    <script src="boardjs/controls/drawingmode.js"></script>  
                    <script src="boardjs/controls/navigation.js"></script>  
                    <script src="boardjs/controls/size.js"></script>  
                    <script src="boardjs/controls/download.js"></script>  
<script data-example="3">  
                    // setup whiteboard to save a whiteboard image right-click on the whiteboard, to load a previously saved whiteboard image just drag the image and drop it on the whiteboard  
                        var customBoard2 = new DrawingBoard.Board('custom-board-2', {  
                            controls: [  
                                'Color', {  
                                    Size: {  
                                        type: 'dropdown'  
                                    }  
                                }, {  
                                    DrawingMode: {  
                                        filler: false  
                                    }  
                                },  
                                'Navigation', 
                            ],  
                            size: 1,  
                            webStorage: 'session',  
                            enlargeYourContainer: true,  
                            droppable: true, //try dropping an image on the canvas!  
                            stretchImg: true //the dropped image can be automatically ugly resized to to take the canvas size  
                        });  
                    </script>  
                    <p>  To <b>save</b>  a whiteboard image right-click on the whiteboard and choose save as then choose where to save and the name of the file.</p>  
                    <p>To <b>load</b>  a previously saved whiteboard image just drag the image and drop it on the whiteboard </p>  
                  </div>  
Rewards section (rewards.php)
  <script>  
    var Win;  
    var loadData3;  
    var loadData2;  
    var showWin = 0;  
    var loadData1;  
    $(document).on("ready", function() {  
        // load the scores for game1,game2,game3 when the page is ready to process  
        loadData1();  
        loadData2();  
        loadData3();    
    });  
</script>  
<script>  
 loadData1 = function() {  
        $.ajax({  
            async: false,  
            cache: false,  
            type: "GET",  
            url: "getScoreGame1.php",  
        }).done(function(data) {  
            users = JSON.parse(data);  
            for(var i in users) {  
                  $(".countresult").append(users[i].Win);  
                Win = (users[i].Win);  
            }  
        });    
    }  
</script>  
<script>  
 loadData2 = function() {  
        $.ajax({  
            async: false,  
            cache: false,  
            type: "GET",  
            url: "getScoreGame2.php",  
        }).done(function(data) {  
            users = JSON.parse(data);  
 for(var i in users) {  
                  $(".countresult2").append(users[i].Win);  
                Win = (users[i].Win);    
            }  
        });  
    }  
</script>  
<script>  
  loadData3 = function() {  
        $.ajax({  
            async: false,  
            cache: false,  
            type: "GET",  
            url: "getScoreGame3.php",  
        }).done(function(data) {  
            users = JSON.parse(data);  
            for(var i in users) {  
                  $(".countresult3").append(users[i].Win);  
                Win = (users[i].Win);  
            }  
        });  
    }  
</script>  
Get lessons for the lessons code (getlessons-better.php)
<?php  
$conn = mysqli_connect("localhost", "root", "secret", "wordplay_demo");  
  // Check connection  
  if (mysqli_connect_errno())  
{  
    echo "Failed to connect to MySQL: " . mysqli_connect_error();  
}  
  $var1 = $_POST['var1'];    
// so check which lesson it is and select the information the database  
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
  $result = mysqli_query($conn, $sql);  
$array_user = array();  
  while ($data = mysqli_fetch_assoc($result))  
{  
    $array_user[] = $data;  
}  
  echo json_encode($array_user);  
  
?>

