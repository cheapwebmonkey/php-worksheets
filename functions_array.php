<!--//returning multiple values with array-->
<?php
  function add_up($a, $b){
    $arr = array(
      $a,
      $b,
      $a + $b
    );
   return $arr;
  }
  $value = add_up(2,3);
  print_r($value);
?>

<!--//returning integers-->
<!--
<?php
  function add_up($a, $b){
   return $a +$b;
  }
  $value = add_up(2,3);
  echo $value;
?>
-->


<!--
<?php
  function hello($name){
    if($name == 'Margeaux'){
      return 'Hello, Margeaux!';
    } else {
      return 'Hello, weirdo';
    }
  }
$greeting = hello('Margeaux');

echo $greeting;
?>
-->




<!--//