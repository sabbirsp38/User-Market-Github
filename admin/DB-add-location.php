<?php
  include 'inc/config.php';
     
    $en_city = addslashes ($_POST['en_city']);
    $de_city = addslashes ($_POST['de_city']);
    $en_country = addslashes ($_POST['en_country']);
    $de_country = addslashes ($_POST['de_country']);
    $en_zip_code = addslashes ($_POST['en_zip_code']);
    $de_zip_code = addslashes ($_POST['de_zip_code']);





  $sql = "INSERT INTO location (en_city, de_city, en_country, de_country, en_zip_code, de_zip_code) VALUES ('$en_city', '$de_city', '$en_country', '$de_country', '$en_zip_code', '$de_zip_code')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: location-list.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

