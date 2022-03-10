
<?php    
$emp = array  
  (  
  array(71,"Suyog",1901480181),  
  array(72,"Ritesh",1901480182),  
  array(73,"Rushikesh",1901480182)  
  );  
  
for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo $emp[$row][$col]."  ";  
  }  
  echo "<br/>";  
}  
?>    