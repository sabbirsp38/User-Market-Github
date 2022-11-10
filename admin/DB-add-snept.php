<?php
  include 'inc/config.php';
     

    $snipet_code = addslashes ($_POST['snipet_code']);





  $sql = "INSERT INTO snipet_code (snipet_code) VALUES ('$snipet_code')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-Snippet.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

