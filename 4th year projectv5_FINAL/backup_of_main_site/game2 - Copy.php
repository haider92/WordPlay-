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
                            <!-- h2> GET JSON DATA FROM PHP AND MYSQL USING AJAX</h2>-->
                        </div>
                    </div>

                    <script>
                        /////////////////////////////////// THE PROBLEM IS WITH DB CHANGE DROPABLE TO DRAG1,DRAG2,DRAG3 ETC
                        var ai = 0;
                        var set1 = 0;
                        var set2 = 0;
                        var set3 = 0;
                        var set4 = 0;
                        var score = 0;
                        var attempt = 0;
                        var limit = 0;
                        //var start=0;
                        var get = 0;
                        var showWin = 0;
                        var maxrow;
                        var test;
                        var selectgame2 = 2;

                        // boolean next_question = false; how many questions and what score got save to db
                        //  var setq;

                        $(document).on("ready", function() {

                            // $("#followbtn").hide();
                            if(get == 0) {
                                loadData3();
                                get++;
                            }
                            $('#followbtn').on('click', function(e) {
                                //$("#followbtn").hide();

                                //    if(get == 0)
                                //    {

                                //   get=1;
                                //  }
                                /* dropped1=0;
                                 dropped2=0;
                                 dropped3=0;
                                 dropped4=0;
                                    firattemptdropbox1=0;
                                    firattemptdropbox2=0;
                                    firattemptdropbox3=0;
                                    firattemptdropbox4=0; */

                                console.log("old codde                      " + oldscore);

                                limit++;
                                if(limit == 5) {
                                    if(oldscore < score) {
                                        console.log("kkkkkkooooooooottta");
                                        showWin = 1;
                                        loadData2(score, showWin);
                                    } else if(oldscore > score) {
                                        console.log("kkkkkkooooooooottta");
                                        showWin = 0;
                                        loadData2(score, showWin);
                                    }
                                    window.location = "game2_final.php";
                                }
                                //next_question = true;
                                // setq=0;
                                attempt = 0;
                                //console.log(" DEBUG SETQ " + setq);
                                $("#drag1").empty();
                                $("#drag2").empty();
                                $("#drag3").empty();
                                $("#drag4").empty();
                                $("#content").empty();
                                e.preventDefault();
                                //$("#drag1").fadeOut();
                                // $("#drag2").fadeOut();
                                // $("#drag3").fadeOut();
                                //$("#drag4").fadeOut();
                                if(set1 >= 1) {
                                    //document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
                                    //document.getElementById("dropbox").innerHTML = "Drop me here";

                                    $("#dropbox1").removeClass("incorrect")
                                    $("#dropbox1").removeClass("correct")
                                    $("#dropbox1").find("p")
                                    $("#dropbox1").html("Drop me here");
                                }
                                if(set2 >= 1) {
                                    //document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
                                    //document.getElementById("dropbox").innerHTML = "Drop me here";

                                    $("#dropbox2").removeClass("incorrect")
                                    $("#dropbox2").removeClass("correct")
                                    $("#dropbox2").find("p")
                                    $("#dropbox2").html("Drop me here");
                                }
                                if(set3 >= 1) {
                                    //document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
                                    //document.getElementById("dropbox").innerHTML = "Drop me here";

                                    $("#dropbox3").removeClass("incorrect")
                                    $("#dropbox3").removeClass("correct")
                                    $("#dropbox3").find("p")
                                    $("#dropbox3").html("Drop me here");
                                }
                                if(set4 >= 1) {
                                    //document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
                                    //document.getElementById("dropbox").innerHTML = "Drop me here";

                                    $("#dropbox4").removeClass("incorrect")
                                    $("#dropbox4").removeClass("correct")
                                    $("#dropbox4").find("p")
                                    $("#dropbox4").html("Drop me here");
                                }
                                //$("#drag1").draggable({ revert: true });
                                //if($(this).attr('id')===result
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
                                // $("#drag1").fadeIn();
                                //  $("#drag2").fadeIn();
                                //   $("#drag3").fadeIn();
                                //  $("#drag4").fadeIn();
                                //var randomnumber=Math.floor(Math.random()*13+1)
                                // var randomnumber =3;
                                //   console.log("random number " + randomnumber);
                                loadData();

                            });
                        });
                    </script>
                    <script>
                        var users;
                        var i;
                        var loadData;
                        var result; // not needed maybe
                        var imageref; // needed only if images are enabled!
                        var answer1;
                        var answer2;
                        var answer3;
                        var answer4;
                        var dropbox1;
                        var dropbox2;
                        var dropbox3;
                        var dropbox4;

                        /* var dropped1=0;
                         var dropped2=0;
                         var dropped3=0;
                         var dropped4=0;
                         var firattemptdropbox1=0;
                         var firattemptdropbox2=0;
                         var firattemptdropbox3=0;
                         var firattemptdropbox4=0;
                         */


                        loadData = function() {
                            $.ajax({
                                type: "POST",
                                // data: data
                                //datatype: 'json',
                                url: "getmaxrowsgame1.php",
                                data: {
                                    var1: selectgame2
                                }
                            }).done(function(data) {
                                console.log(data + "daaaaaaaaattttttttttttaaaaaaaaaa"); //this is working
                                users = JSON.parse(data);


                                for(var i in users) {

                                    maxrow = (users[i].maxrow);
                                    console.log("maxrowsssssss      " + maxrow);
                                    alert(typeof maxrow);
                                    test = parseInt(Math.floor(Math.random() * maxrow + 1));
                                    console.log("test random    " + test);
                                    //  test = parseInt(maxrow);
                                    alert(typeof test);
                                    if(20 != test + 1) {
                                        console.log("test+1    " + test + 1);
                                        console.log("idiot gamer    " + test);
                                    }

                                    console.log("test      " + test);



                                }

                                getint = 1;
                                console.log("GETS HERE 2");

                                secondCall()
                            });

                        }


                        function secondCall() {
                            $.ajax({
                                type: "POST",
                                url: "game2_select.php",
                                data: {
                                    var1: test
                                }
                            }).done(function(data) {
                                console.log(data); //this is working
                                users = JSON.parse(data);
                                //if(randomnumber==1||randomnumber==2||randomnumber==3)
                                //  {

                                /*(  (function printMsg() {
                                 var node = document.getElementById("content");
                                  node.innerHTML = '<img src="' + "images/game1/image1.jpg"+ '" />';
                                   node.innerHTML = '<img src="' + "images/image1.jpg"+ '" />';
                                  })(); */
                                //  }  

                                for(var i in users) {
                                    $("#content").append(users[i].game2ID + " " + users[i].question + "<br>");
                                    $("#drag1").append(users[i].drag1 + " " + "<br>");
                                    answer1 = (users[i].drag1);
                                    $("#drag2").append(users[i].drag2 + " " + "<br>");
                                    answer2 = (users[i].drag2);
                                    $("#drag3").append(users[i].drag3 + " " + "<br>");
                                    answer3 = (users[i].drag3);
                                    $("#drag4").append(users[i].drag4 + " " + "<br>");
                                    answer4 = (users[i].drag4);
                                    // $("#dropbox1").append(users[i].dropbox1 + " " + "<br>");
                                    dropbox1 = (users[i].dropbox1);
                                    //      $("#dropbox2").append(users[i].dropbox2 + " " + "<br>");
                                    dropbox2 = (users[i].dropbox2);
                                    //     $("#dropbox3").append(users[i].dropbox3 + " " + "<br>");
                                    dropbox3 = (users[i].dropbox3);
                                    //    $("#dropbox4").append(users[i].dropbox4 + " " + "<br>");
                                    dropbox4 = (users[i].dropbox4);
                                    $(".answerhintgame2").append("Answer is <br>" + users[i].answer);
                                    good = (users[i].answer);
                                    //  answer4.toString();
                                    //  $("#content").append(users[i].correct + " " + "<br>");
                                    //  result = (users[i].correct);
                                    //    $("#content").append(users[i].images + " " + "<br>");
                                    // imageref = (users[i].images);


                                    console.log("-----------------------------------");
                                    console.log("BOOOOOOOOOOOOOOX " + dropbox1);
                                    console.log("-----------------------------------");
                                    console.log(dropbox2);
                                    console.log(dropbox3);
                                    console.log(dropbox4);
                                    console.log("-----------------------------------");
                                    console.log("ANSEERSSSSSSSSSSSSSS PARSER");
                                    console.log(answer1);
                                    console.log(answer2);
                                    console.log(answer3);
                                    console.log(answer4);
                                    console.log("gooooooooooooooooooood " + good);


                                    //  console.log(result);
                                    //      console.log("image test " + imageref);



                                }
                                $(".answerhintgame2").hide();
                                console.log("gooooooooooooooooooood2" + good);


                                //		function changeImage()
                                //	{ 


                                //			document.getElementById("content").src="images/" + imageref
                                //            console.log("iiiiiiiiiimmmmmmmmmmmmmmmmages" + imageref);

                                //}

                                //    (function printMsg() {
                                //      var node = document.getElementById("picture");
                                // node.innerHTML = '<img src="' + "images/game1/image1.jpg"+ '" />';
                                //           node.innerHTML = '<img src="' + "images/"+ '" imageref />';
                                // node.innerHTML = "<img src=\images/" + imageref + "\>";
                                //  node.innerHTML = "<img class='picture' width='150'src=\"" + imageref + "\">";

                                // })();

                            });
                        }
                    </script>

                    <script>
                        //console.log("SCOOOOOORRRREEEEEEEEEE IS           " + score);
                        var loadData2;
                        loadData2 = function(score, showWin) {
                            $.ajax({
                                type: "POST",
                                url: "insertScoreGame2.php",
                                data: {
                                    var1: score,
                                    var2: showWin
                                }
                            }).done(function(data) {
                                console.log("scores!!!!!!!!!!           " + score); // 2



                            });
                        }
                    </script>

                    <script>
                        var oldscore;
                        var loadData3;
                        loadData3 = function() {
                            $.ajax({
                                type: "GET",
                                url: "getScoreGame2.php",
                            }).done(function(data) {
                                console.log(data + "daaaaaaaaattttttttttttaaaaaaaaaa"); //this is working
                                users = JSON.parse(data);


                                for(var i in users) {

                                    oldscore = (users[i].score);

                                    console.log("wyhhhhhhhhhhhhhat was score         " + oldscore);
                                }
                            });
                        }
                    </script>
                    <script>
                        //  $(document).on("ready", function(){
                        //  whatever = function (attempt){

                        // /alert("your score " + score);
                        //console.log( " SCORE " + score);
                        //iscore(score);
                        //});
                    </script>
                    <script>
                        //$(document).on("ready", function(){
                        function scorei(attempt) {
                                if(attempt == 0) {
                                    score = score + 3;
                                    console.log(score);
                                    countUp(score);

                                } else if(attempt == 1) {
                                    score = score + 2;
                                    countUp(score);

                                } else if(attempt > 1) {
                                    score++;
                                    countUp(score);
                                    //setq=1;
                                }
                            }
                            //var count=0;
                            //count++;
                            //count++;
                            //console.log( "count " + count);
                            //countUp(count);
                            //console.log( " SCORE " + score);
                            //countUp(score);
                            //console.log(ai);
                            //});
                    </script>

                    <script>
                        var shouldRevert1 = function(droppable) { //function to see if a question box should revert to its original location
                            if(droppable == false) { //if box is not the target area, it should revert.
                                return true;
                            }
                            /*else if ($("#dropbox1").length > 0){
                                                   return true;
                                           } */
                            else if($(this).attr('id') == dropbox1) {
                                return true;
                            } else if($(this).attr('id') != dropbox1) {
                                return true;
                            } else if($(this).attr('id') != dropbox2) {
                                return true;
                            } else if($(this).attr('id') == dropbox2) {
                                return true;
                            } else if($(this).attr('id') != dropbox3) {
                                return true;
                            } else if($(this).attr('id') == dropbox3) {
                                return true;
                            } else if($(this).attr('id') != dropbox4) {
                                return true;
                            } else if($(this).attr('id') == dropbox4) {
                                return true;
                            }
                            /*else if($(this).attr('id')==dropbox1 && dropped1==1){
                        return true;
					}
                    else if($(this).attr('id')==dropbox2 && dropped2==1){
                        return true;
					}
                    else if($(this).attr('id')==dropbox3 && dropped3==1){
                        return true;
					}
                    else if($(this).attr('id')==dropbox4 && dropped4==1){
                        return true;
					} */
                            else { //all other cases it should revert.
                                return true;
                            }
                        }
                    </script>
                    <script>
                        /*  var shouldRevert2 = function(droppable){				//function to see if a question box should revert to its original location
                        					if(droppable == false){							//if box is not the target area, it should revert.
                        						return true;
                        					}
                        					else if($(this).attr('id')==dropbox2){
                        						return false;
                        					}
                        					else{											//all other cases it should revert.
                        						return true;
                        					}
                        				}
                                       */
                    </script>
                    <script>
                        var shouldRevert3 = function(droppable) { //function to see if a question box should revert to its original location
                            if(droppable == false) { //if box is not the target area, it should revert.
                                return true;
                            } else if($(this).attr('id') == dropbox3) {
                                return false;
                            } else { //all other cases it should revert.
                                return true;
                            }
                        }
                    </script>
                    <script>
                        var shouldRevert4 = function(droppable) { //function to see if a question box should revert to its original location
                            if(droppable == false) { //if box is not the target area, it should revert.
                                return true;
                            } else if($(this).attr('id') == dropbox4) { //if the correct answer is dropped to the target area, it should not revert.
                                return false;
                            } else { //all other cases it should revert.
                                return true;
                            }
                        } * /
                    </script>

                    <script>
                        //$(document).on("ready", function(){
                        function countUp(count) {
                                //var div_by = 100,
                                //speed = Math.round(count / div_by),
                                //  speed = count++;
                                $display = $('.count'),
                                    //    run_count = 1,
                                    // int_speed = 0;

                                    int = setInterval(function() {
                                        //if(run_count <100){
                                        //$display.text();
                                        // run_count++;
                                        // } 
                                        if(parseInt($display.text()) < count) {
                                            var curr_count = parseInt($display.text()) + 1;
                                            $display.text(curr_count);
                                        }
                                    }, null);
                            }
                            //var count=0;
                            //count++;
                            //count++;
                            //console.log( "count " + count);
                            //countUp(count);
                            //console.log( " SCORE " + score);
                            //countUp(score);
                            //console.log(ai);
                            //});
                    </script>
                    <script>
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
                                //    activeClass: "state-active",
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    //  alert($(ui.draggable).data("myData"));
                                    alert(ui.draggable.attr('id'));

                                    console.log(" AFTER THIS : " + dropbox1);
                                    alert($("#dropbox1").data("dropped"));
                                    if(ui.draggable.attr('id') == dropbox1) {
                                        ui.draggable.hide(1000); //if the "correct" element is true, then this droppable is the right answer
                                        $(this)

                                        $("#dropbox1").removeClass("incorrect")
                                        $("#dropbox1").removeClass("incorrect")
                                        $("#dropbox1").addClass("correct") //If the answer if the correct one, add a new class called "correct"
                                            //.removeClass("incorrect") 			//remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox1").find("p")
                                        $("#dropbox1").html("correct!"); //print to droppable box
                                        $("#dropbox1").hide(1000);
                                        set1++;
                                        scorei(attempt);
                                        //firattemptdropbox1++;

                                    } else //if the "correct" element is true, then this droppable is the right answer
                                    {
                                        $(this)
                                        $("#dropbox1").removeClass("correct")
                                        $("#dropbox1").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox1").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox1").html("incorrect");
                                        //firattemptdropbox1++;
                                        set1++; //print to droppable box
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });

                                        if(attempt < 3) {
                                            attempt++;
                                            // setq=1;
                                            //console.log(" DEBUG SETQ " + setq);
                                        }
                                    }
                                }
                            });




                            $("#dropbox2").droppable({
                                //    activeClass: "state-active",
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    //  alert($(ui.draggable).data("myData"));
                                    alert(ui.draggable.attr('id'));


                                    console.log(" AFTER THIS : " + dropbox2);
                                    if(ui.draggable.attr('id') == dropbox2) { //if the "correct" element is true, then this droppable is the right answer
                                        ui.draggable.hide(1000);
                                        $(this)
                                        $("#dropbox2").removeClass("incorrect")
                                        $("#dropbox2").removeClass("incorrect")
                                        $("#dropbox2").addClass("correct")
                                            //If the answer if the correct one, add a new class called "correct"
                                            //.removeClass("incorrect") 			//remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox2").find("p")
                                        $("#dropbox2").html("correct!");
                                        $("#dropbox2").hide(1000); //print to droppable box
                                        //firattemptdropbox2++;
                                        set2++;
                                        scorei(attempt);


                                    } else //if the "correct" element is true, then this droppable is the right answer
                                    {

                                        $(this)
                                        $("#dropbox2").removeClass("correct")
                                        $("#dropbox2").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox2").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox2").html("incorrect");
                                        set2++; //print to droppable box

                                        //firattemptdropbox2++;
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                        if(attempt < 3) {
                                            attempt++;
                                            // setq=1;
                                            //console.log(" DEBUG SETQ " + setq);
                                        }
                                    }
                                }
                            });




                            $("#dropbox3").droppable({
                                //    activeClass: "state-active",
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    //  alert($(ui.draggable).data("myData"));
                                    alert(ui.draggable.attr('id'));

                                    //console.log(" AFTER THIS : " + dropbox3!=dropbox2 && firattemptdropbox3 ==0 );
                                    if(ui.draggable.attr('id') == dropbox3) {
                                        ui.draggable.hide(1000); //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox3").removeClass("incorrect")
                                        $("#dropbox3").removeClass("incorrect")
                                        $("#dropbox3").addClass("correct") //If the answer if the correct one, add a new class called "correct"
                                            //.removeClass("incorrect") 			//remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox3").find("p")
                                        $("#dropbox3").html("correct!");
                                        $("#dropbox3").hide(1000); //print to droppable box
                                        //           firattemptdropbox3++;

                                        set3++;
                                        scorei(attempt);


                                    } else //if the "correct" element is true, then this droppable is the right answer
                                    {

                                        $(this)
                                        $("#dropbox3").removeClass("correct")
                                        $("#dropbox3").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox3").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox3").html("incorrect");
                                        //    firattemptdropbox3++;
                                        set3++; //print to droppable box
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                        if(attempt < 3) {
                                            attempt++;
                                            // setq=1;
                                            //console.log(" DEBUG SETQ " + setq);
                                        }
                                    }
                                }
                            });

                            $("#dropbox4").droppable({
                                //    activeClass: "state-active",
                                activeClass: "ui-state-default",
                                hoverClass: "ui-state-hover",

                                drop: function(event, ui) {
                                    //  alert($(ui.draggable).data("myData"));

                                    alert(ui.draggable.attr('id'));
                                    console.log(" AFTER THIS : " + dropbox4);
                                    if(ui.draggable.attr('id') == dropbox4) {
                                        ui.draggable.hide(1000); //if the "correct" element is true, then this droppable is the right answer
                                        $(this)
                                        $("#dropbox4").removeClass("incorrect")
                                        $("#dropbox4").removeClass("incorrect")
                                        $("#dropbox4").addClass("correct") //If the answer if the correct one, add a new class called "correct"
                                            //.removeClass("incorrect") 			//remove a pre-existing incorrect class, from a previously wrong answer
                                        $("#dropbox4").find("p")
                                        $("#dropbox4").html("correct!"); //print to droppable box
                                        $("#dropbox4").hide(1000);
                                        //      firattemptdropbox4++;

                                        set4++;

                                        scorei(attempt);


                                    } else //if the "correct" element is true, then this droppable is the right answer
                                    {
                                        $(this)
                                        $("#dropbox4").removeClass("correct")
                                        $("#dropbox4").addClass("incorrect") //adds the .incorrect class to the target area. Turns it red, and prints incorrect.
                                        $("#dropbox4").find("p") //finds a <p> tag for writing to the target box
                                        $("#dropbox4").html("incorrect");
                                        // firattemptdropbox4++;
                                        set4++; //print to droppable box
                                        //firattemptdropbox4++;
                                        ui.draggable.animate({
                                            top: "0px",
                                            left: "0px"
                                        });
                                        if(attempt < 3) {
                                            attempt++;

                                        }
                                    }
                                }
                            });
                        });
                    </script>



                    <div class="scorearea">
                        <div class="count">0</div>
                        <div id="score">score</div>

                    </div>
                    <div class="clockarea" align="center" style="margin:2em;">

                        <div class="clock" align="center" style="margin:2em;"></div>
                        <div class="message"></div>
                    </div>
                    <script>
                        var clock;

                        $(document).ready(function() {

                            clock = $('.clock').FlipClock(500, {
                                clockFace: 'MinuteCounter',
                                autoStart: true,
                                countdown: true,
                                callbacks: {
                                    stop: function() {
                                        window.location = "game2_final.php";
                                    }
                                }
                            });
                        });
                    </script>
                    <div class="progressbararea">
                        <div id="v-center-basic">

                            <div class="fixed-height-250">
                                <div class="progress vertical bottom">
                                    <div class="progress-bar" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                $(document).ready(function() {
                                    $('.next').click(function() {

                                        var $pb = $('#v-center-basic .progress-bar');
                                        if(limit == 1) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 10).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 2) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 20).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 3) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 30).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 4) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 40).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 5) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 50).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 6) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 60).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 7) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 70).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 8) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 80).progressbar({
                                                display_text: 'center'
                                            });
                                        }
                                        if(limit == 9) {
                                            $('#v-center-basic .progress-bar').attr('data-transitiongoal', 90).progressbar({
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
                            <p>Drop me here</p>
                        </div>
                        <div id="dropbox2" class="ui-widget-header">
                            <p>Drop me here</p>
                        </div>
                        <div id="dropbox3" class="ui-widget-header">
                            <p>Drop me here</p>
                        </div>
                        <div id="dropbox4" class="ui-widget-header">
                            <p>Drop me here</p>
                        </div>
                    </div>

                    <div class="answerhintgame2 ">



                    </div>


                </div>
                <div class="next">
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
                                    var pong = new Howl({
                                        urls: ['http://www.javascriptoo.com/application/html/pong.wav']
                                    })
                                    document.getElementById('jp-play').onclick = function() {
                                        pong.play()
                                    }
                                </script>
                                <button id="jp-play">answer</button>
                                <script>
                                    $("button").click(function() {
                                        console.log("gooooooooooooooooooood3 " + good);
                                        $(".answerhintgame2").show();
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