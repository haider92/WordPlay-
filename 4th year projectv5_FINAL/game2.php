<?php require( 'header/header.php'); ?>



<!-- Main Menu -->
<div class="side-menu-container">
    <ul class="nav navbar-nav">

        <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
        <li class="active"><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
        <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
        <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
        <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
        <li><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>

        <!-- Dropdown-->
        <li class="panel panel-default" id="dropdown">
            <a data-toggle="collapse" href="#dropdown-lvl1">
                <span class="glyphicon glyphicon-menu-down"></span> Admin <span class="caret"></span>
            </a>

            <?php require( 'header/dropdown1.php'); ?>


            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div id="header">

                        <h1> WordPlay!</h1>
                    </div>

                    <div id="picture"></div>
                    <div class="questionarea2">
                        <div id="content">
                        </div>
                    </div>
                    <script>
                    //all varabiles for game2 spelling
                       var clock;
                       var startofgame1 = 0;
                        var startclock = 0;
                        var set1 = 0;
                        var set2 = 0;
                        var set3 = 0;
                        var set4 = 0;
                        var score = 0;
                        var attempt = 0;
                        var limit = 0;
                        var clicks = 1;
                        var getscore = 0;
                        var showWin = 0;
                        var maxrow;
                        var test;
                        var selectgame2 = 2;
                        var iscorrect = 0;
                        var timer = 0;
                        var alreadyasked = [];
                        var noquestionalreadyasked = 0;
                        
                        // when document is ready to process
                        $(document).on("ready", function(w) {
                        // the menu is shown to the user and the user not started hide all game divs
                            if (startofgame1 == 0) {
                                $("#drag1").hide();
                                $("#drag2").hide();
                                $("#drag3").hide();
                                $("#drag4").hide();
                                $("#dropbox1").hide();
                                $("#dropbox2").hide();
                                $("#dropbox3").hide();
                                $("#dropbox4").hide();
                                $(".count").hide();
                                $("#score").hide();
                                $(".clock").hide();
                                $(".progressbararea").hide();
                            }

                             //at the start of the game load the previous score
                            if (getscore== 0) {
                                getPreviousScore();
                                getscore++;
                            }
                            // when the next button is clicked do the following:
                            $('#followbtn').on('click', function(e) {
                                // if its the first time clicking next unhide question
                                startofgame1 = 1;
                                if (startofgame1 == 1) {
                                    $("#drag1").fadeIn();
                                    $("#drag2").fadeIn();
                                    $("#drag3").fadeIn();
                                    $("#drag4").fadeIn();
                                    $("#dropbox1").fadeIn();
                                    $("#dropbox2").fadeIn();
                                    $("#dropbox3").fadeIn();
                                    $("#dropbox4").fadeIn();
                                    $(".count").fadeIn();
                                    $("#score").fadeIn();
                                    $(".clock").fadeIn();
                                    $(".progressbararea").fadeIn();
                                    $("#startofgame1").hide();
                                    $("#followbtn").hide();
                                    iscorrect = 0;

                                }
                                // this is for the flipclock.js so if its the start of the game start the clock otherwise skip.
                                $(document).ready(function() {
                                      if (startclock == 0) {
                                        clock = $('.clock').FlipClock(150, {
                                            clockFace: 'MinuteCounter',
                                            autoStart: true,
                                            countdown: true,
                                            callbacks: {
                                                stop: function() {
                                                 // if high score is less then current score UPDATE highscore and show throphy and ran out of time message
                                                    if (oldscore < (score)) {
                                                        console.log("old score is " + oldscore);
                                                        console.log("CURRENT score is " + score);
                                                        console.log("last highest score was less you win");
                                                        showWin = 1;
                                                        timer = 1;
                                                        insertScoreAndWinValue(score, showWin, timer);
                                                    } // if high score is GREATER then current score dont update highscore and  dont show throphy and ran out of time message
                                                    else {
                                                       // console.log("last highest score is more you lose");
                                                        showWin = 0;
                                                        timer = 1;
                                                        insertScoreAndWinValue(score, showWin, timer);
                                                    }
                                                    window.location = "game2_final.php ";
                                                }
                                            }

                                        });
                                        startclock++;
                                    }
                                });
                                
                               // console.log("old codde                      " + oldscore);


                                
                                // if the max limit of questions is reached check the last highest score was lower
                                //than the current score and showWin = 1 means you won otherwise you lose
                                if (limit == 10) {
                                    if (oldscore < (score)) 
                                    {
                                        console.log("old score is " + oldscore);
                                        console.log("CURRENT score is " + score);
                                        console.log("last highest score was less you win");
                                        
                                        showWin = 1;
                                        timer = 0;
                                        insertScoreAndWinValue(score, showWin, timer);
                                    } else {
                                        showWin = 0;
                                        timer = 0;
                                        insertScoreAndWinValue(score, showWin, timer);
                                    }
                                    window.location = "game2_final.php";
                                }
                                limit++;
                                 
                                 // when next is clicked reset the attempt to 0 
                                attempt = 0;

                                // //remove data from drag and dropbox divs
                                $("#drag1").empty();
                                $("#drag2").empty();
                                $("#drag3").empty();
                                $("#drag4").empty();
                                $("#content").empty();
                                $("#answers").empty();
                                e.preventDefault();
                                
                                  // reset the dropboxes color to grey
                                if (set1 >= 1) {

                                    $("#dropbox1").removeClass("incorrect")
                                    $("#dropbox1").removeClass("correct")
                                    $("#dropbox1").find("p")
                                    $("#dropbox1").html("Drop me here");
                                }
                                if (set2 >= 1) {

                                    $("#dropbox2").removeClass("incorrect")
                                    $("#dropbox2").removeClass("correct")
                                    $("#dropbox2").find("p")
                                    $("#dropbox2").html("Drop me here");
                                }
                                if (set3 >= 1) {
                                   
                                    $("#dropbox3").removeClass("incorrect")
                                    $("#dropbox3").removeClass("correct")
                                    $("#dropbox3").find("p")
                                    $("#dropbox3").html("Drop me here");
                                }
                                if (set4 >= 1) {

                                    $("#dropbox4").removeClass("incorrect")
                                    $("#dropbox4").removeClass("correct")
                                    $("#dropbox4").find("p")
                                    $("#dropbox4").html("Drop me here");
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
                                
                                // re enable the draggables and dropbox
                                $('#drag1').draggable('enable')
                                $('#drag2').draggable('enable')
                                $('#drag3').draggable('enable')
                                $('#drag4').draggable('enable')
                                $('#dropbox1').droppable('enable')
                                $('#dropbox2').droppable('enable')
                                $('#dropbox3').droppable('enable')
                                $('#dropbox4').droppable('enable')
                                
                                 // call get getMaxRowThenSelect to get the maximum number of rows and then select the rows in the database 
                                // to start game2
                                getMaxRowThenSelect();

                            });
                        });
                    </script>
                    <script>
                        var users;
                        var i;
                        var getMaxRowThenSelect;
                        var result; // used for debugging
                        var answer1;
                        var answer2;
                        var answer3;
                        var answer4;
                        var dropbox1;
                        var dropbox2;
                        var dropbox3;
                        var dropbox4;
                        
                        getMaxRowThenSelect = function() {
                            $.ajax({
                                type: "POST",
                                url: "getmaxrowsgame1.php",
                                data: {
                                    var1: selectgame2
                                }
                            }).done(function(data) {
                             //   console.log(data + "data"); //this is working
                                users = JSON.parse(data);


                                for (var i in users) {

                                    maxrow = (users[i].maxrow);
                                    //console.log("maxrowsssssss      " + maxrow);
                                    test = parseInt(Math.floor(Math.random() * maxrow + 1));
                                   // console.log("test random    " + test);
                                   //  console.log("test      " + test);
                                }
                                
                               // if question isnt already asked selectRowsForGameAndDisplay() method and parse and display it on the div
                                noquestionalreadyasked = 0;
                                // check questions already asked
                                for (var i = 0; i < alreadyasked.length; i++)
                                {
                                    if (alreadyasked[i] == test) 
                                    { 
                                        getMaxRowThenSelect();
                                        noquestionalreadyasked = 1;
                                        break;
                                    }
                                }
                                 // if not already asked parse and display it
                                if (noquestionalreadyasked == 0) 
                                {
                                    selectRowsForGameAndDisplay();
                                }
                            });

                        }

                         //using the random number call the selectRowsForGameAndDisplay method to select it from the database
                        // THEN display it on the correctly on the divs
                        function selectRowsForGameAndDisplay() {
                            $.ajax({
                                type: "POST",
                                url: "game2_select.php",
                                data: {
                                    var1: test
                                }
                            }).done(function(data) {
                                //console.log(data); //this is working
                                users = JSON.parse(data);
                                 // go through the database row and place the data from the row in some places in html and in vars
                                for (var i in users) {
                                    $("#content").append(clicks++ + "." + " " + users[i].question + "<br>");
                                    $("#drag1").append(users[i].drag1 + " " + "<br>");
                                    answer1 = (users[i].drag1);
                                    $("#drag2").append(users[i].drag2 + " " + "<br>");
                                    answer2 = (users[i].drag2);
                                    $("#drag3").append(users[i].drag3 + " " + "<br>");
                                    answer3 = (users[i].drag3);
                                    $("#drag4").append(users[i].drag4 + " " + "<br>");
                                    answer4 = (users[i].drag4);
                                    dropbox1 = (users[i].dropbox1);
                                    dropbox2 = (users[i].dropbox2);
                                    dropbox3 = (users[i].dropbox3);
                                    dropbox4 = (users[i].dropbox4);
                                    $("#answers").append("Answer is <br>" + users[i].answer);
                                    result = (users[i].answer);
                                    
                                    // for debugging
                                 //   console.log("-----------------------------------");
                                 //   console.log("BOOOOOOOOOOOOOOX " + dropbox1);
                                 //   console.log("-----------------------------------");
                                 //   console.log(dropbox2);
                                 //   console.log(dropbox3);
                                //    console.log(dropbox4);
                                //    console.log("-----------------------------------");
                                //    console.log("ANSEERSSSSSSSSSSSSSS PARSER");
                                //    console.log(answer1);
                                //    console.log(answer2);
                                //    console.log(answer3);
                                //    console.log(answer4);
                               //     console.log("result " + result);


                                }
                                // hide answers
                                $("#answers").hide();
                                // so the question that was selected put that in the array of already asked questions
                                alreadyasked.push(test);
                            });
                        }
                    </script>
                    <script>
                          //when called it inserts the current score and win value for the current game showWin=0 means lose and showWin=1 means a win
                        var insertScoreAndWinValue;
                        insertScoreAndWinValue = function(score, showWin, timer) {
                            $.ajax({
                                type: "POST",
                                url: "insertScoreGame2.php",
                                data: {
                                    var1: score,
                                    var2: showWin,
                                    var3: timer
                                }
                            }).done(function(data) {
                               // for debugging
                               //  console.log("scores!!!!!!!!!!           " + score); // 2
                               // console.log("timer!!!!!!!!!!!!           " + timer); // 2
                            });
                        }
                    </script>
                    <script>
                        var oldscore;
                        var getPreviousScore;
                            //when called gets the previous score from the last session
                       getPreviousScore = function() {
                            $.ajax({
                                type: "GET",
                                url: "getScoreGame2.php",
                            }).done(function(data) {
                               // console.log(data + "data of scores array "); //this is working
                                users = JSON.parse(data);


                                for (var i in users) {

                                    oldscore = (users[i].oldscore);
                                    // debugging
                                    //console.log("what was OLDSCORE         " + oldscore);
                                    //console.log("what was score         " + score);

                                }
                            });
                        }
                    </script>
                    <script>
                    // if answered question correctly then show next button
                        function correct(iscorrect) {
                            if (iscorrect == 4) {
                                $("#followbtn").fadeIn();
                            }
                        }
                    </script>
                    <script>
                    // scorei = scoreincrements checks the attempt of the user and increments the score value and then calls the countup function which displays that in html
                        function scorei(attempt) {
                                if (attempt == 0) {
                                    score = score + 3;
                                    //console.log(score);
                                    countUp(score);

                                } else if (attempt == 1) {
                                    score = score + 2;
                                    countUp(score);

                                } else if (attempt > 1) {
                                    score++;
                                    countUp(score);
                                }
                            }
                    </script>

                    <script>
                        var shouldRevert1 = function(droppable) { //function to see if a question box should revert to its original location
                            if (droppable == false) { //if box is not the target area, it should revert.
                                return true;
                            }

                        }
                    </script>
                    <script>
                       // gets the score value from scorei and increments it in the html
                        function countUp(count) { 
                                $display = $('.count'),
                                    int = setInterval(function() {
                                        if (parseInt($display.text()) < count) {
                                            var curr_count = parseInt($display.text()) + 1;
                                            $display.text(curr_count);
                                        }
                                    }, null);
                            }
                    </script>
                    <script>
                        //setup the draggables and dropboxes
                       $(function() {
                            $("#drag1").draggable({
                                revert: shouldRevert1
                            });
                            $("#drag2").draggable({
                                revert: shouldRevert1
                            });
                            $("#drag3").draggable({
                                revert: shouldRevert1
                            });
                            $("#drag4").draggable({
                                revert: shouldRevert1
                            });

                            $("#dropbox1").droppable({
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    if (ui.draggable.attr('id') == dropbox1) { //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox1").removeClass("incorrect")
                                        $("#dropbox1").addClass("correct") //If the answer is the correct one, add a new class called "correct"
                                        $("#dropbox1").find("p")
                                        $("#dropbox1").html("correct!"); //print to droppable box
                                        // disable the dropbox and draggables
                                        ui.draggable.draggable('disable')
                                        ui.draggable.css('opacity', '1');
                                        $('#dropbox1').droppable("disable");
                                        $('#dropbox1').css('opacity', '1');
                                          
                                          // play well done sound
                                        var sound = new Howl({
                                            urls: ['helpsound/right.mp3']
                                        }).play();
                                        
                                        // set this to know to reset colours of the dropbox later when click next
                                        set1++;
                                        //increase score
                                        scorei(attempt);
                                        // its correct so show next button
                                        iscorrect++;
                                        correct(iscorrect);
                                        
                                    } else //if the "correct" element is false, then this droppable is the wrong answer
                                    {
                                        $(this)
                                        $("#dropbox1").removeClass("correct")
                                        $("#dropbox1").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox1").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox1").html("incorrect"); //print to droppable box
                                        set1++; // this will allow the this dropbox to reset to grey when next is clicked
                                        
                                        // play wrong sound
                                        var sound = new Howl({
                                            urls: ['helpsound/wrong.mp3']
                                        }).play();
                                        
                                        // move draggable to start position
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                        // attempt < 3 increment it
                                        if (attempt < 3) {
                                            attempt++;
                                        }
                                    }
                                }
                            });

                            $("#dropbox2").droppable({
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                
                                    if (ui.draggable.attr('id') == dropbox2) { //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox2").removeClass("incorrect") //remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox2").addClass("correct") //If the answer if the correct one, add a new class called "correct"
                                        $("#dropbox2").find("p")
                                        $("#dropbox2").html("correct!");  //print to droppable box
                                        
                                        // disable the dropbox and draggables
                                        ui.draggable.draggable('disable')
                                        ui.draggable.css('opacity', '1');
                                        $('#dropbox2').droppable("disable");
                                        $('#dropbox2').css('opacity', '1');
                                        
                                        // play well done sound
                                        var sound = new Howl({
                                            urls: ['helpsound/right.mp3']
                                        }).play();
                                        
                                        // set this to know to reset colours of the dropbox later when click next
                                        set2++;

                                        //increase score
                                        scorei(attempt);
                                        // its correct so show next button
                                        iscorrect++;
                                        correct(iscorrect);
                                        
                                    } 
                                    else //if the "correct" element is false, then this droppable is the wrong answer
                                    {

                                        $(this)
                                        $("#dropbox2").removeClass("correct")
                                        $("#dropbox2").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox2").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox2").html("incorrect"); //print to droppable box
                                        
                                        // set this to know to reset colours of the dropbox later when click next
                                        set2++; 
                                        
                                          // play wrong sound
                                        var sound = new Howl({
                                            urls: ['helpsound/wrong.mp3']
                                        }).play();
                                        
                                        // move draggable to start position
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                         // attempt < 3 increment it
                                        if (attempt < 3) {
                                            attempt++;
                                        }
                                    }
                                }
                            });

                            $("#dropbox3").droppable({
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                  
                                    if (ui.draggable.attr('id') == dropbox3) {  //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox3").removeClass("incorrect") //remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox3").addClass("correct") //If the answer if the correct one, add a new class called "correct"
                                        $("#dropbox3").find("p")
                                        $("#dropbox3").html("correct!");
                                          
                                        // disable the dropbox and draggables
                                        ui.draggable.draggable('disable')
                                        ui.draggable.css('opacity', '1');
                                        $('#dropbox3').droppable("disable");
                                        $('#dropbox3').css('opacity', '1');
                                       
                                        // set this to know to reset colours of the dropbox later when click next
                                        set3++;
                                        // play well done sound
                                        var sound = new Howl({
                                            urls: ['helpsound/right.mp3']
                                        }).play();
                                        
                                       //increase score
                                        scorei(attempt);
                                        //its correct so show next button
                                        iscorrect++;
                                        correct(iscorrect);



                                    } else //if the "correct" element is false, then this droppable is the wrong answer
                                    {

                                        $(this)
                                        $("#dropbox3").removeClass("correct")
                                        $("#dropbox3").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox3").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox3").html("incorrect"); //print to droppable box
                                        
                                        // set this to know to reset colours of the dropbox later when click next
                                        set3++;
                                        
                                          // play wrong sound
                                        var sound = new Howl({
                                            urls: ['helpsound/wrong.mp3']
                                        }).play();
                                        // reset draggables
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                       // increment attempts
                                       if (attempt < 3) {
                                            attempt++;
                                        }
                                    }
                                }
                            });

                            $("#dropbox4").droppable({
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    if (ui.draggable.attr('id') == dropbox4) { //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox4").removeClass("incorrect") //remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox4").addClass("correct") //If the answer if the correct one, add a new class called "correct"   	
                                        $("#dropbox4").find("p")
                                        $("#dropbox4").html("correct!"); //print to droppable box
                                       
                                        ui.draggable.draggable('disable')
                                        ui.draggable.css('opacity', '1');
                                        $('#dropbox4').droppable("disable");
                                        $('#dropbox4').css('opacity', '1');
                                          // set this to know to reset colours of the dropbox later to grey when click next
                                        set4++;
                                        
                                        // play well done sound
                                        var sound = new Howl({
                                            urls: ['helpsound/right.mp3']
                                        }).play();
                                        
                                       //increase score
                                        scorei(attempt);
                                        // its correct so show next button
                                        iscorrect++;
                                        correct(iscorrect);

                                    } else //if the "correct" element is false, then this droppable is the wrong answer
                                    {
                                        $(this)
                                        $("#dropbox4").removeClass("correct")
                                        $("#dropbox4").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox4").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox4").html("incorrect"); //print to droppable box
                                         // set this to know to reset colours of the dropbox later to grey when click next
                                        set4++;
                                        
                                        // play wrong sound
                                        var sound = new Howl({
                                            urls: ['helpsound/wrong.mp3']
                                        }).play();
                                        
                                      // reset draggables
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                        // increament attempts
                                        if (attempt < 3) {
                                            attempt++;

                                        }
                                    }
                                }
                            });
                        });
                    </script>



                    <div class="scorearea">
                        <div class="count">0</div>
                        <div id="score">Score</div>

                    </div>
                    <div class="clockarea2" align="center" style="margin:2em;">

                        <div class="clock" align="center" style="margin:2em;"></div>
                        <div class="message"></div>
                    </div>
                     <script>
                        // sound plugin
                      /*  var sound = new Howl({
                            urls: ['helpsound/soundtrack.mp3'],
                            loop: true,
                        }).play(); */
                    </script>
                    <div class="progressbararea">
                        <div id="v-center-basic">

                            <div class="fixed-height-250">
                                <div class="progress vertical bottom">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                 // this manages the sidebar when next is clicked increment the bar and fill it up...
                                $(document).ready(function() {
                                    $('.next2').click(function() {

                                        var $pb = $('#v-center-basic .progress-bar');
                                        if (limit == 1) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 10).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 2) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 20).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 3) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 30).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 4) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 40).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 5) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 50).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 6) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 60).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 7) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 70).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 8) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 80).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 9) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 90).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if (limit == 10) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 100).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                    });
                                    $('#v-center-basic-reset').click(function() {
                                        $('#v-center-basic .progress-bar').attr('data-transitiongoal', 0).progressbar({
                                            display_text: 'center'
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                    <div class="startgame1">
                        <div id="startofgame1">
                            <p> Welcome to Spelling words game!</p>
                            <p>Try and see if you can spell the Words by placing the letters in the correct order.</p>
                            <p> Have fun!</p>
                        </div>
                    </div>
                    <div class="dragdropgame2drag ">
                        <div id="drag1" class="ui-widget-content">
                        </div>
                        <div id="drag2" class="ui-widget-content">
                        </div>
                        <div id="drag3" class="ui-widget-content">
                        </div>
                        <div id="drag4" class="ui-widget-content">
                        </div>
                    </div>
                    <div class="dragdropgame2dropbox ">
                        <div id="dropbox1" class="ui-widget-header">
                            <p>Drop here</p>
                        </div>
                        <div id="dropbox2" class="ui-widget-header">
                            <p>Drop here</p>
                        </div>
                        <div id="dropbox3" class="ui-widget-header">
                            <p>Drop here</p>
                        </div>
                        <div id="dropbox4" class="ui-widget-header">
                            <p>Drop here</p>
                        </div>
                    </div>
                    <div class="answerhintgame2 ">
                        <div id="answers">
                        </div>
                    </div>
                </div>
                <div class="next2">
                    <div><a href="#" id="followbtn">Next</a></div>
                </div>
                <div align="center" class="helparea2" style="margin:2em;">

                    <script type="text/javascript">
                        $(function() {
                            $("#Accordion1").accordion({
                                active: false,
                                collapsible: true
                            });
                        });
                    </script>
                    <style>
                        .wrap {
                            margin-top: 20%
                        }
                    </style>
                    <div class="wrap">
                        <div id="Accordion1">


                            <h3><b><a href="#">Help</a></b></h3>
                            <div>
                                <button id="jp-play">play</button>
                                <script>
                                   // sound of how to play game2
                                        var help = new Howl({
                                            urls: ['helpsound/game2help.mp3']
                                        })
                                        $(document).ready(function() {
                                            $("#jp-play").click(function() {
                                                help.play()
                                            });
                                        });

                                    
                                </script>
                                <button id="jp-repeat">answer</button>
                                
                                <script>
                                // show answers
                                    $(document).ready(function() {
                                        $("#jp-repeat").click(function() {
                                            $("#answers").show();
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
</div>
</div>



</body>

</html>