<?php
  include 'inc/config.php';
     
    $en_title = addslashes ($_POST['en_title']);
    $de_title = addslashes ($_POST['de_title']);
    $icon = addslashes ($_POST['icon']);
    $cat_id=(rand(10,100000));
   


 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['icon']['name'];
            $file_size = $_FILES['icon']['size'];
            $file_temp = $_FILES['icon']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;

            $uploaded_image = "../uploads/".$unique_image;

            if ($file_size >200048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO category() VALUES ('')";
               } 

               
/*Logo Image End here*/


  $sql = "INSERT INTO category (en_title, de_title, icon, cat_id) VALUES ('$en_title', '$de_title', '$unique_image', '$cat_id')";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-catagory.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

