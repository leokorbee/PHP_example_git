<html>
  <h1>Netwerken voor Software Developers</h1>
  <br>
  
<?php
  
  $colors = array("red", "green", "blue", "yellow"); 

  foreach ($colors as $value) 
  {
    echo "$value <br>";
  }
  
  writeMsg(); // call the function
    
  function writeMsg() 
  {
    echo "Have fun!";
  }
    
?>

</html>
