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
           $a = TRUE;
           $b = TRUE;
          

           //compare
//          var_dump( $a == $b ); //equal operator
//          var_dump( $a === $d ); //identical operator
//          var_dump( $a != $b ); //not equal operator
//          var_dump( $a !== $b ); //not identical operator
//
//          var_dump( $a > $b ); //greater than operator
//          var_dump( $a < $b ); //less than operator
//          var_dump( $a <= $b ); //less than or equal to operator
//          var_dump( $a >= $b ); //greater than or equal to operator

        var_dump( $a and $b ); //and will return TRUE if both a and b are true
        var_dump( $a or $b ); //or will return TRUE if either a and b are true
        var_dump( ! $a ); //and will return TRUE if a is NOT true
          
        var_dump( $a && $b ); //and will return TRUE if both a and b are true
        var_dump( $a || $b ); //or will return TRUE if either a and b are true

          
      ?></pre>
    </section>
  </body>
</html>