<html>
  <h1>Netwerken voor Software Developers</h1>
  <br>
  
<?php
  
  $colors = array("rood", "groen", "blauw", "geel"); 

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
