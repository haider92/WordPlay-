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

                    <div class="questionarea">
                        <div id="content">
                            <!-- h2> GET JSON DATA FROM PHP AND MYSQL USING AJAX</h2>-->
                        </div>
                    </div>
                    <div class="possibleanswers3">
                        <div id="answers">
                            <!-- h2> GET JSON DATA FROM PHP AND MYSQL USING AJAX</h2>-->
                        </div>
                    </div>

                    <script>
                        var ai = 0;
                        var set = 0;
                        var score = 0;
                        var attempt = 0;
                        var limit = 0;
                        var start = 0;
                        var get = 0;
                        var questiontype;
                        var inputVal;
                        var inputVal2;
                        var inputVal3;
                        var click = 1;
                        var selectgame3 = 3;
                        var showWin = 0;




                        //var six = "<div id='dropbox2' class='ui-widget-header'><p>Drop me here</p> </div>"
                        //var seven = "<div id='dropbox3' class='ui-widget-header'><p>Drop me here</p> </div>"
                        //var eight = "<div id='dropbox4' class='ui-widget-header'><p>Drop me here</p> </div>"




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
                                $("#content").empty();
                                $("#sentencefrag1").empty();
                                $("#sentencefrag2").empty();
                                $("#answers").empty();
                                $('#textbox1').val('');
                                $("#textbox1").css({
                                    "background-color": "white"
                                });
                                $("#textbox1").css({
                                    "border": "5px solid black"
                                });
                                $('#textbox2').val('');
                                $("#textbox2").css({
                                    "background-color": "white"
                                });
                                $("#textbox2").css({
                                    "border": "5px solid black"
                                });
                                $('#textbox3').val('');
                                $("#textbox3").css({
                                    "background-color": "white"
                                });
                                $("#textbox3").css({
                                    "border": "5px solid black"
                                });
                                //  document.getElementById("textbox1").style.border="5px solid black";

                                //    if(get == 0)
                                //    {

                                //   get=1;
                                //  }
                                //inputVal="";
                                //  inputVal2="";
                                //   inputVal3="";


                                console.log("old codde                      " + oldscore);

                                limit++;
                                if(limit == 4) {
                                    if(oldscore < score) {
                                        console.log("kkkkkkooooooooottta");
                                        showWin = 1;
                                        loadData2(score, showWin);
                                    } else if(oldscore > score) {
                                        console.log("kkkkkkooooooooottta");
                                        showWin = 0;
                                        loadData2(score, showWin);
                                    }
                                    window.location = "game3_final.php";
                                }




                                //   e.preventDefault();
                                console.log("AAAAAAATEMMMMMMMMMMMMMMMPTING   " + attempt);


                                //next_question = true;
                                // setq=0;
                                //attempt =0;
                                //console.log(" DEBUG SETQ " + setq);

                                //$("#drag1").fadeOut();
                                // $("#drag2").fadeOut();
                                // $("#drag3").fadeOut();
                                //$("#drag4").fadeOut();
                                /* if(set>=1)
            {
            //document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
            //document.getElementById("dropbox").innerHTML = "Drop me here";
            
                          $("#dropbox").removeClass("incorrect")
                          $("#dropbox").removeClass("correct")
                           $("#dropbox").find("p")	
                          $("#dropbox").html("Drop me here");
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
    */
                                // $("#drag1").fadeIn();
                                //  $("#drag2").fadeIn();
                                //   $("#drag3").fadeIn();
                                //  $("#drag4").fadeIn();
                                //var randomnumber=Math.floor(Math.random()*2+1)
                                // questiontype =Math.floor(Math.random()*1+1)
                                //questiontype = 2;
                                //var randomnumber =1;
                                // console.log("random number " + randomnumber);
                                loadData();

                            });
                        });
                    </script>
                    <script>
                        var users;
                        var i;
                        var loadData;
                        var textbox1;
                        var imageref;
                        var sentencefrag1;
                        var textbox2;
                        var sentencefrag2;
                        var textbox3;



                        loadData = function() {
                            $.ajax({
                                type: "POST",
                                // data: data
                                //datatype: 'json',
                                url: "getmaxrowsgame1.php",
                                data: {
                                    var1: selectgame3
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
                                url: "game3_select.php",
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
                                    $("#answers").append(users[i].textbox1 + "<br>");
                                    textbox1 = (users[i].textbox1);
                                    $("#content").append(click++ + " " + users[i].question + "<br>");
                                    $("#sentencefrag1").append(users[i].sentencefrag1 + " ");
                                    sentencefrag1 = (users[i].sentencefrag1);
                                    $("#answers").append(users[i].textbox2 + "<br>");
                                    textbox2 = (users[i].textbox2);
                                    $("#sentencefrag2").append(users[i].sentencefrag2 + " ");
                                    sentencefrag2 = (users[i].sentencefrag2);
                                    $("#answers").append(users[i].textbox3 + "<br>");
                                    textbox3 = (users[i].textbox3);
                                    //  $("#t").append(users[i].answer2 + " " + "<br>");
                                    //   answer2= (users[i].answer2);
                                    //   $("#drag3").append(users[i].answer3 + " " + "<br>");
                                    //   answer3= (users[i].answer3);
                                    //    $("#drag4").append(users[i].answer4 + " " + "<br>");
                                    //    answer4 =(users[i].answer4);
                                    //  answer4.toString();
                                    //  $("#content").append(users[i].correct + " " + "<br>");
                                    //    result = (users[i].correct);
                                    //    $("#content").append(users[i].images + " " + "<br>");
                                    //imageref = (users[i].images);


                                    console.log(textbox1);
                                    console.log(sentencefrag1);
                                    console.log(textbox2);
                                    console.log(sentencefrag2);
                                    console.log(textbox3);

                                    $("#answers").hide();
                                    // console.log("image test " + imageref);



                                }



                                //		function changeImage()
                                //	{ 


                                //			document.getElementById("content").src="images/" + imageref
                                //            console.log("iiiiiiiiiimmmmmmmmmmmmmmmmages" + imageref);

                                //}

                                // (function printMsg() {
                                //var node = document.getElementById("picture");
                                // node.innerHTML = '<img src="' + "images/game1/image1.jpg"+ '" />';
                                //           node.innerHTML = '<img src="' + "images/"+ '" imageref />';
                                // node.innerHTML = "<img src=\images/" + imageref + "\>"; // 2nd best
                                //  node.innerHTML = "<img class='picture' width='150'src=\"" + imageref + "\">"; // best 

                                //})();

                            });
                        }
                    </script>

                    <script>
                        //console.log("SCOOOOOORRRREEEEEEEEEE IS           " + score);
                        var loadData2;
                        loadData2 = function(score) {
                            $.ajax({
                                type: "POST",
                                url: "insertScoreGame3.php",
                                data: {
                                    var1: score
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
                                url: "getScoreGame3.php",
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
                        function checkFilled1() {


                            inputVal = $('#textbox1').val();
                            console.log("INPUT VALLLLLLLLLLLLLLLUE    " + inputVal);
                            if(inputVal == textbox1) {

                                document.getElementById("textbox1").style.backgroundColor = "lightgreen";
                                document.getElementById("textbox1").style.border = "5px solid lightgreen";
                                scorei(attempt);
                                console.log("GETS HEREEEEEEEEEEEEEEEEEE 1");
                            }
                            if(inputVal != textbox1) {
                                document.getElementById("textbox1").style.backgroundColor = "red";
                                document.getElementById("textbox1").style.border = "5px solid red";
                                if(attempt < 6) {
                                    attempt++;


                                }
                                if(attempt >= 1) {

                                    console.log("CHECKED 1           " + attempt);
                                }
                            }
                            //else{
                            //    document.getElementById("textbox1").style.backgroundColor = "orange";
                            //    document.getElementById("textbox1").style.border="5px solid black";
                            //     document.getElementById("textbox1").readOnly =false;
                            // }
                        }

                        checkFilled1();



                        function checkFilled2() {
                            inputVal2 = document.getElementById("textbox2").value;
                            if(inputVal2 == textbox2) {
                                document.getElementById("textbox2").style.backgroundColor = "lightgreen";
                                document.getElementById("textbox2").style.border = "5px solid lightgreen";
                                scorei(attempt);
                            }
                            if(inputVal2 != textbox2) {
                                document.getElementById("textbox2").style.backgroundColor = "red";
                                document.getElementById("textbox2").style.border = "5px solid red";
                                if(attempt < 6) {
                                    attempt++;


                                }


                            }
                            //  else{
                            //      document.getElementById("textbox2").style.backgroundColor = "white";
                            //     document.getElementById("textbox2").style.border="5px solid black";
                            //     document.getElementById("textbox2").readOnly =false;
                            // }
                        }

                        checkFilled2();

                        function checkFilled3() {
                            inputVal3 = document.getElementById("textbox3").value;
                            if(inputVal3 == textbox3) {
                                document.getElementById("textbox3").style.backgroundColor = "lightgreen";
                                document.getElementById("textbox3").style.border = "5px solid lightgreen";
                                scorei(attempt);
                            }
                            if(inputVal3 != textbox3) {
                                document.getElementById("textbox3").style.backgroundColor = "red";
                                document.getElementById("textbox3").style.border = "5px solid red";
                                if(attempt < 6) {
                                    attempt++;


                                }


                            }
                            //  else{
                            //     document.getElementById("textbox3").style.backgroundColor = "white";
                            //     document.getElementById("textbox3").style.border="5px solid black";
                            //     document.getElementById("textbox3").readOnly =false;
                            // }
                        }

                        checkFilled3();

                        //scorei(attempt);
                        //if(attempt<3)
                        //{
                        //  attempt++;
                        // setq=1;
                        //console.log(" DEBUG SETQ " + setq);
                        //}
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
                                        window.location = "game3_final.php";
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
                                    $('.next2').click(function() {

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

                    <!--</head> -->
                    <div class="sengame3">





                        <input type="text" id="textbox1" onchange="checkFilled1();" />
                        <input type="text" id="textbox2" onchange="checkFilled2();" />
                        <input type="text" id="textbox3" onchange="checkFilled3();" />
                        <div id="sentencefrag1">
                        </div>
                        <div id="sentencefrag2">
                        </div>

                        <script>
                            //ai++;
                            //if(ai ==1 ){
                            ///document.write("<div id='drag1' class='ui-widget-content'></div>"); 
                            //console.log("ai "  + ai);
                            //}
                            //ai++;
                            //if(ai==1 ){
                            //document.write("<div id='drag2' class='ui-widget-content'></div>");
                            //}
                            //if($("drag3").attr('id')==result ){
                            //document.write("<div id='drag3' class='ui-widget-content'></div>");
                            //}
                            //if($("drag4").attr('id')==result ){
                            //document.write("<div id='drag4' class='ui-widget-content'></div>");
                            //}
                        </script>
                        <!--<div id="drag1" class="ui-widget-content">
	<!-- <p>I revert when I'm dropped</p> -->
                        <!--</div>

<!--<div id="drag2" class="ui-widget-content">
	<!-- <p>I revert when I'm not dropped</p> -->
                        <!--</div>

<!-- <div id="drag3" class="ui-widget-content">
	<!--<p>this is a test3</p> -->
                        <!-- </div> --->

                        <!-- div id="drag4" class="ui-widget-content"> -->
                        <!-- <p>this is test4</p>  --->

                    </div>

                    <!-- <div id="dropbox" class="ui-widget-header">
	<p>Drop me here</p>
</div>   --->

                    <!-- <script>
document.write("<div id='dropbox' class='ui-widget-header'><p>Drop me here</p></div>");
</script> -->
                    <div class="next2 ">
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
                                            urls: ['a.wav']
                                        })
                                        document.getElementById('jp-play').onclick = function() {
                                            pong.play()
                                        }
                                    </script>
                                    <button id="jp-play">answer</button>
                                    <script>
                                        $("button").click(function() {
                                            console.log("gooooooooooooooooooood3 ");
                                            $("#answers").show();
                                        });
                                    </script>


                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                    <!-- </div>
<span></span>
</body> -->

                </div>
            </div>
</div>



</body>

</html>