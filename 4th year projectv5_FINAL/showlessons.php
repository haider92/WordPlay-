<?php require('header/header.php'); ?>
<body>
<!-- Main Menu -->
    <div class="side-menu-container">
        <ul class="nav navbar-nav">
            
            <li><a href="index.php"><span class="glyphicon glyphicon-menu-hamburger"></span>Home</a></li>
            <li><a href="games_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Interactive Games </a></li>
               <li><a href="rewards.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Rewards </a></li>
              <li><a href="whiteboard.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Whiteboard </a></li>
              <li><a href="lessons_menu.php"><span class="glyphicon glyphicon-menu-hamburger"></span> Lessons</a></li>
               <li ><a href="about.php"><span class="glyphicon glyphicon-menu-hamburger"></span> About</a></li>
            
        

            <!-- Dropdown-->
            <li class="active" class="panel panel-default" id="dropdown">
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

<style>
.error {color: #FF0000;}
</style>    
<?php require('php/connection.php'); ?>
<?php

$query = "SELECT  l . *, ls. *  FROM lessons l, lessonsen ls;";
$result = mysqli_query($link, $query); //or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($link));

if($result) {
    echo "<h3> LESSONS TABLE </h3>";
       echo "<table  border='10px solid black' style='width:100%'>";
          echo "<tr> <th> lessonID </th><th>  heading </th><th> images </th> <th> lessonsenID </th> <th> lessonID </th> <th>  sen </th></tr>";
    //  echo "<tr>";
	while($row = mysqli_fetch_assoc($result)) {
      
         echo "<tr>";
         
         	
		echo "<td> " . $row["lessonID"] . " </td> " . " <td> " . $row["heading"]. "  </td> " ."  <td> "  . $row["images"]." </td> ". "  <td>  ". $row["lessonsenID"]." </td> ".
        " <td>  ". $row["lessonID"]. " </td> ".  "  </td>  " ."<td>" .$row["sen"]." </td> ";
        echo "</tr>";
	}
     echo "</tr>";
      echo "</table>";
      echo "<br>";
      echo "<br>";
    }
    
     
    

mysqli_close($link);

?>

        </div>
    </div>
</div>

   

</body>

</html>
