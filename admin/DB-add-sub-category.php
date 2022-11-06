<?php
  include 'inc/config.php';
     
    $en_name = addslashes ($_POST['en_name']);
    $de_name = addslashes ($_POST['de_name']);
    $parent_cat  = addslashes ($_POST['parent_cat']);





  $sql = "INSERT INTO sub_catagory (en_name, de_name, parent_cat) VALUES ('$en_name', '$de_name', '$parent_cat')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-sub-catagory.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

