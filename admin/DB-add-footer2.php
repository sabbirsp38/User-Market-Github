<?php
  include 'inc/config.php';
     
    $en_titile = addslashes ($_POST['en_titile']);
    $de_titile = addslashes ($_POST['de_titile']);
    $en_dec = addslashes ($_POST['en_dec']);
    $de_dec = addslashes ($_POST['de_dec']);
   





  $sql = "INSERT INTO footer2 (en_titile, de_titile, en_dec, de_dec) VALUES ('$en_titile', '$de_titile', '$en_dec', '$de_dec')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-fotter2.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

