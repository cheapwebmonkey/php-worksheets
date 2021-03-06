<?php

define("USE_FULL_NAME", TRUE);
define("MAX_BADGES", 20);
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
      <ul><?php
        //for loop: first item evaluated no matter what
        // last imtem is run at end of loop every time -until middle conditional is met
        //You can loop through something a certain number of times by defining a          constant, or a variable that you can test against in the second argument of our For loop.
        for($counter = 0; $counter <= MAX_BADGES; $counter ++){
          echo "<li>" . $counter . "</li>";
}
          
      ?></ul>
    </section>
  </body>
</html>