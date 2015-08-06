<?php

define("USE_FULL_NAME", TRUE);
define("MAX_BADGES", 150000);

//This is my first name
$first_name = "Margeaux";
$last_name = "Spring";
$location = "Louisville, KY";
$role = "Front End Dev";
//conditional statements-if else elseif
if( USE_FULL_NAME == TRUE ) {
  $name = $first_name . ' ' . $last_name;
} else {
    $name = $first_name;
}

if( $role == "Front End Dev"){
  $info = " I am a Front End Developer at Awesomeville";
} elseif( $role == 'Student'){
    $info = "Student at Treehouse";
} else {
  $info = "I'm just visitng";
}

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
      <p<?php echo $info; ?></p>
      <hr />
      <p><?php echo $role ?></p>
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