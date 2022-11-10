<?php
  include 'inc/config.php';
     
    $en_location = addslashes ($_POST['en_location']);
    $de_location = addslashes ($_POST['de_location']);
    $en_number = addslashes ($_POST['en_number']);
    $de_number = addslashes ($_POST['de_number']);
    $en_email = addslashes ($_POST['en_email']);
    $de_email = addslashes ($_POST['de_email']);





  $sql = "INSERT INTO contact_info (en_location, de_location, en_number, de_number, en_email, de_email) VALUES ('$en_location', '$de_location', '$en_number', '$de_number', '$en_email', '$de_email')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-contact-info.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

