<?php

define("YEAR", 2015);
define("JOB_TITLE", "Front-End Dev");
define("MAX_BADGES", 150000);

//This is my first name
$name = "Margeaux";
$location = "Louisville, KY";
$full_name ="Margeaux Spring";
//Use full name as our name
$name = $full_name;
?>

<!DOCTYPE html>
<html>
  <head>
  	<meta charset=utf-8>
  	<title><?php echo $name ?> | Treehouse Profile</title>
  	<link href="css/style.css" rel="stylesheet" />
  </head>
  
  <body>
    <section class="sidebar text-center">
      <div class="avatar">
        <img src="img/avatar.png" alt="<?php echo $name ?>">
      </div>
      <h1><?php echo $name ?></h1>
      <p><?php echo $location ?></p>
      <hr />
      <p>Welcome to PHP Basics!</p>
      <hr />
      <ul class="social">
        <li><a href=""><span class="icon twitter"></span></a></li>
      </ul>
    </section>
    <section class="main">
      <pre><?php
//      OR    $array = [];
          $eye_colors = array(
  //assigning keys to the array
               'patrick' => 'blue', 
               'margeaux' => 'green'
          );
        
          print_r($eye_colors);

    //change the value of a key in an array
          $eye_colors['margeaux'] = 'grey';
          $eye_colors['patrick'] = 'purple';
        
    //finding the values of an array's keys
          echo $eye_colors['margeaux'];
          echo $eye_colors['patrick'];

    //add a new element to an array (or key)
          $eye_colors['chuck'] = 'green';
          print_r($eye_colors);


//add a new value to arry
//          $eye_colors[] = "amber";
//          print_r($eye_colors);
////modify the value in an array
//          $eye_colors[1] = "grey";
//
////access the value in an array
//          echo $eye_colors[1];
          
      ?></pre>
    </section>
  </body>
</html>