<?php require( 'header/header.php'); ?>

<body>
  <!-- Main Menu -->
  <div class="side-menu-container">
    <ul class="nav navbar-nav">

      <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
      <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
      <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
      <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
      <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
      <li class="active"><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>


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

            <h3> <b>Why WordPlay?</b><h3>
               <p>Children today spend a lot of time on the playing computer video games, whether it be mobile, tablet or on a computer. The inspiration for the project was to make an application to make learning fun for children. </p>
            <h3><b>About The Web Application</b><h3>
<p>Word Play, is a game based learning web application mainly aimed at children aged 8 - 10 years old . The system was designed to make learning fun through playing games. </p>

<p>The primary focus of the application is mainly to teach key aspects of English, which is helping children to build up their vocabulary, grammar, and spelling knowledge of the English language. </p>

            <br>
            <br>
           
         
        </div>
    </div>
</div>

   

</body>

</html>