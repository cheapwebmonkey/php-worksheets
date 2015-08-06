<!--//take an array of values, in this case name, and loop through them in a function.-->

<?php

function hello($arr){
  if(is_array($arr)){
    foreach($arr as $name){
      echo "Hello, $name, how's it going!</br>";    
    }    
  } else {
    echo 'Hello, friends!';
  }
}

$names = array(
  'Hampton',
  'Mike',
  'Charley'
);
hello($names);
?>

//simply by calling Hello and then passing through an array, we now have multiple Hellos from a single function.