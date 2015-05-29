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
                    <div class="contdainer">
                        <h2 align="center">Games Menu!</h2>
                        <p align="center"> Click on a game to play!</p>


                        <div class="row">
                            <div class="col-md-4">
                                <a href="game1.php" class="thumbnail">
                                    <p>Spot the Picture</p>
                                    <img src="siteimages\game1.jpg" alt="Click here to play Spot the picture" style="width:200px;height:150px">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="game2.php" class="thumbnail">
                                    <p>Spelling words</p>
                                    <img src="siteimages\game2.jpg" alt="Click here to play Spelling words" style="width:`10px;height:150px">
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="game3.php" class="thumbnail">
                                    <p>Making Sentences</p>
                                    <img src="siteimages\game3.jpg" alt="Click here to play Making Sentences" style="width:200px;height:150px">
                                </a>
                            </div>
                            <br>


                        </div>
                    </div>
                </div>
            </div>



            </body>

            </html>