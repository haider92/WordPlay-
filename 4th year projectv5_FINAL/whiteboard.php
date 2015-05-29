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
                }
                
                @media only screen and (min-width: 0px) and (max-width: 800px) {
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
                        
                          <div id="Accordion1">
				<h3><b><a href="#">How to use Whiteboard</a></b></h3>
				<div>
					<p>  To <b>save</b>  a whiteboard image right-click on the whiteboard and choose "save image as" then choose where to save and the name of the file.</p>
                    <p>To <b>load</b>  a previously saved whiteboard image just drag the image and drop it on the whiteboard </p>
				</div>
			</div>
            <br>
            <br>
                        
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

                    <br>
            <br>
            <br>
           
			
            
			<script type="text/javascript">
				$(function() {
					$("#Accordion1" ).accordion({ active: false, collapsible: true });
				});
				
			</script>

                   





                </div>