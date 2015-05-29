<?php require('header/header.php'); ?>





<!-- Main Menu -->
<div class="side-menu-container">
  <ul class="nav navbar-nav">

    <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
    <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
    <li class="active"><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
    <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
    <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
    <li><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>

    <!-- Dropdown-->
    <li class="panel panel-default" id="dropdown">
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

          <script>
            var Win;
            var getScoreGame3;
            var getScoreGame2;
            var showWin = 0;
            var getScoreGame1;
            $(document).on("ready", function() {
              // load the amount of wins for game1,game2,game3 when the page is ready to process
              getScoreGame1();
              getScoreGame2();
              getScoreGame3();



            });
          </script>




          <script>
            getScoreGame1 = function() {
              $.ajax({
                async: false,
                cache: false,
                type: 'GET',
                url: 'getScoreGame1.php',
              }).done(function(data) {
                users = JSON.parse(data);

                for (var i in users) {


                  $(".countresult").append(users[i].Win);
                  Win = (users[i].Win);

                }


              });




            }
          </script>

          <script>
            getScoreGame2 = function() {
              $.ajax({
                async: false,
                cache: false,
                type: "GET",
                url: "getScoreGame2.php",
              }).done(function(data) {
                users = JSON.parse(data);


                for (var i in users) {


                  $(".countresult2").append(users[i].Win);
                  Win = (users[i].Win);




                }


              });




            }
          </script>


          <script>
            getScoreGame3 = function() {
              $.ajax({
                async: false,
                cache: false,
                type: "GET",
                url: "getScoreGame3.php",
              }).done(function(data) {
                users = JSON.parse(data);


                for (var i in users) {


                  $(".countresult3").append(users[i].Win);
                  Win = (users[i].Win);

                }


              });




            }
          </script>


          <h2 align="center">Rewards</h2>

          <div class="rewardsarea">
            <div id="scoreresultwin">Trophies you have won spot in the picture
              <br>
              <br><img src="siteimages\trophy.png" alt="Trophies you have won spot in the picture" width="100px" height="100px" class="center-block "></div>
            <div class="countresult"></div>
            <div id="scoreresult">Trophies you have won in spelling word game
              <br>
              <br><img src="siteimages\trophy.png" alt="Trophies you have won in spelling word game" width="100px" height="100px" class="center-block "></div>
            <div class="countresult2"></div>
            <div id="scoreresult">Trophies you have won in Making sentences
              <br>
              <br><img src="siteimages\trophy.png" alt=">Trophies you have won in Making sentences" width="100px" height="100px" class="center-block "></div>
            <br>
            <div class="countresult3"></div>


          </div>
        </div>
      </div>
</div>



</body>

</html>