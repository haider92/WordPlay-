<?php require( 'header/header.php'); ?>





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

            <?php require( 'header/dropdown1.php'); ?>


            <!-- Main Content -->
            <div class="container-fluid">
                <div class="side-body">
                    <div id="header">

                        <h1> WordPlay!</h1>
                    </div>


                    <script>
                        // load lesson 2
                        var loadlesson;
                        var imageref;
                        var whichlesson = 2;
                        var heading;
                        $(document).on("ready", function() {
                            loadlesson();
                        });
                    </script>

                    <script>
                        loadlesson = function() {
                            $.ajax({
                                async: false,
                                cache: false,
                                type: "POST",
                                url: "getlessons-better.php",
                                data: {
                                    var1: whichlesson
                                }
                            }).done(function(data) {
                                console.log(data + "daaaaaaaaattttttttttttaaaaaaaaaa"); //this is working
                                users = JSON.parse(data);

                                for (var i in users) {
                                    heading = (users[i].heading);
                                    $("#lessoncontent").append(users[i].sen + "<br>");
                                    imageref = (users[i].images);
                                }
                                (function showImage() {
                                    var node = document.getElementById("picture");
                                    var node2 = document.getElementById("heading");
                                    node.innerHTML = "<img id='picture' src=\"" + imageref + "\">";
                                    node2.innerHTML = "<H2> " + heading;
                                })();
                            });
                        }
                    </script>

                    <div id="heading"></div>
                    <div class="imagelessonarea">
                        <div id="picture"></div>
                    </div>

                    <div class="lessonarea">
                        <div id="lessoncontent"></div>
                    </div>





                </div>
            </div>
</div>



</body>

</html>