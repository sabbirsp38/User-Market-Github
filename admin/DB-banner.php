<?php
  include 'inc/config.php';
     
    $cat_id = addslashes ($_POST['cat_id']);
    $en_banner_title = addslashes ($_POST['en_banner_title']);
    $de_banner_title = addslashes ($_POST['de_banner_title']);
    $en_banner_dec = addslashes ($_POST['en_banner_dec']);
    $de_banner_dec = addslashes ($_POST['de_banner_dec']);
    $en_botton_text = addslashes ($_POST['en_botton_text']);
    $de_botton_text = addslashes ($_POST['de_botton_text']);
    $button_url = addslashes ($_POST['button_url']);
    $banner_img = addslashes ($_POST['banner_img']);

   


 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['banner_img']['name'];
            $file_size = $_FILES['banner_img']['size'];
            $file_temp = $_FILES['banner_img']['tmp_name'];
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


  $sql = "UPDATE category set cat_id='$cat_id', en_banner_title='$en_banner_title', de_banner_title='$de_banner_title', en_banner_dec='$en_banner_dec', de_banner_dec='$de_banner_dec', en_botton_text='$en_botton_text', de_botton_text='$de_botton_text', button_url='$button_url', banner_img='$unique_image' where cat_id =$cat_id ";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: view-banner.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

