<?php
  function get_info ($name, $title =Null){
    if($title){
      echo "$name hase arrrived, they are with us as a $title";
    } else {
        echo "$name hase arrrived.";
    }
    
  }

get_info('Margeaux');
?>

<!--//So, in order to get a optional argument we can simply pass through the default argument as null, //or we can pass through a string or any kind of value we want to use as our default argument in the //argument definition of the function such as in line three.-->