<?php require('header/header.php'); ?>





    <!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">
            
            <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
            <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
            <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
            <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
            <li class="active"><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
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

  <h2 align="center">Lessons Menu</h2>
  <p align="center">Click on lesson to start learning!</p>            
  

<div class="row">
    <div class="col-md-4">
      <a href="lesson1.php" class="thumbnail">
        <p>lesson 1</p>    
        <img src="siteimages\lesson1.jpg" alt=" click here to start lesson one" style="width:200px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
      <a href="lesson2.php" class="thumbnail">
        <p>lesson 2</p>
        <img src="siteimages\lesson2.jpg" alt="click here to start lesson two" style="width:200px;height:150px">
      </a>
    </div>
    <div class="col-md-4">
      <a href="lesson3.php" class="thumbnail">
        <p>lesson 3</p>      
         <img src="siteimages\lesson3.jpg" alt="click here to start lesson three" style="width:200px;height:150px">
      </a>
    </div>
  </div>
  <br>
  <br>


           
			
          
        </div>
    </div>
</div>

   

</body>

</html>
