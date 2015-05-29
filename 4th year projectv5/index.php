<?php require( 'header/header.php'); ?>

<body>
  <!-- Main Menu -->
  <div class="side-menu-container">
    <ul class="nav navbar-nav">

      <li class="active"><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
      <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
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

            <h3> <b>Welcome to Wordplay!</b><h3>
           
           <p>Wordplay! is a web application that focuses on learning English through playing interactive games. Have Fun! </p>
           
       <br>
       <br>
       <br>

			<div id="Accordion1">
				<h3><b><a href="#">Interactive games</a></b></h3>
            <div>
              <p>Click on <a href="games_menu.php" style="color:#008B8B">Interactive games</a> to play some interactive games </p>
            </div>
            <h3><b><a href="#">Lessons</a></b></h3>
            <div>
              <p>Click on <a href="lessons_menu.php" style="color:#008B8B">Lessons</a> to start learning the basics of English. </p>
            </div>
            <h3><b><a href="#">Rewards</a></b></h3>
            <div>
              <p>Click on <a href="rewards.php" style="color:#008B8B">Rewards</a> to see what you have won!</p>
            </div>
          </div>
          <br>
          <br>



          <script type="text/javascript">
            $(function() {
              $("#Accordion1").accordion({
                active: false,
                collapsible: true
              });
            });
          </script>


        </div>
  </div>
  </div>



</body>

</html>
