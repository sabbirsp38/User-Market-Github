<?php
  include 'inc/config.php';
     
    $en_meta_titile = addslashes ($_POST['en_meta_titile']);
    $de_meta_titile = addslashes ($_POST['de_meta_titile']);
    $en_meta_dec = addslashes ($_POST['en_meta_dec']);
    $de_meta_dec = addslashes ($_POST['de_meta_dec']);
    $en_meta_keword = addslashes ($_POST['en_meta_keword']);
    $de_meta_keword = addslashes ($_POST['de_meta_keword']);





  $sql = "INSERT INTO seo (en_meta_titile, de_meta_titile, en_meta_dec, de_meta_dec, en_meta_keword, de_meta_keword) VALUES ('$en_meta_titile', '$de_meta_titile', '$en_meta_dec', '$de_meta_dec', '$en_meta_keword', '$de_meta_keword')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-meta.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

