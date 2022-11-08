    <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

        ?>

<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "usermarket";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection    
  if ($conn->connect_error) 
  {
      die("Connection went wrong: " . $conn->connect_error); 
  } 






 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['P_imag1']['name'];
            $file_size = $_FILES['P_imag1']['size'];
            $file_temp = $_FILES['P_imag1']['tmp_name'];
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
                        $sql = "INSERT INTO adds() VALUES ('')";
               } 

               
/*Logo Image End here*/

 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['P_imag2']['name'];
            $file_size = $_FILES['P_imag2']['size'];
            $file_temp = $_FILES['P_imag2']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image2 = substr(md5(time()), 0, 40).'.'.$file_ext;

            $uploaded_image = "../uploads/".$unique_image2;

            if ($file_size >200048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO adds() VALUES ('')";
               } 

               
/*Logo Image End here*/


 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['P_imag3']['name'];
            $file_size = $_FILES['P_imag3']['size'];
            $file_temp = $_FILES['P_imag3']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image3 = substr(md5(time()), 0, 30).'.'.$file_ext;

            $uploaded_image = "../uploads/".$unique_image3;

            if ($file_size >200048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO adds() VALUES ('')";
               } 

               
/*Logo Image End here*/


 /*Logo Image start here*/
            $permited  = array('jpg', 'JPG', 'jpeg','JEPG', 'png', 'PNG', 'png','gif');
            $file_name = $_FILES['P_imag4']['name'];
            $file_size = $_FILES['P_imag4']['size'];
            $file_temp = $_FILES['P_imag4']['tmp_name'];
            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image4 = substr(md5(time()), 0, 20).'.'.$file_ext;

            $uploaded_image = "../uploads/".$unique_image4;

            if ($file_size >200048567) {
                 echo "<span class='error'>Image Size should be less then 2MB!
                 </span>";
                } elseif (in_array($file_ext, $permited) === false) {

                         echo "<span class='error'>You can upload only:-"
                         .implode(', ', $permited)."</span>";
                        } else{

                        move_uploaded_file($file_temp, $uploaded_image);
                        $sql = "INSERT INTO adds() VALUES ('')";
               } 

               
/*Logo Image End here*/





    
    $city = addslashes ($_POST['city']);
    $county = addslashes ($_POST['county']);
    $zip_code = addslashes ($_POST['zip_code']);
    $uni_id = addslashes ($_POST['uni_id']);
    $P_title = addslashes ($_POST['P_title']);
    $from_catagory = addslashes ($_POST['P_catagory']);
    $P_catagory= substr($from_catagory , 0, -2); 
    $p_sub_catagory = addslashes ($_POST['p_sub_catagory']);
    $p_price = addslashes ($_POST['p_price']);
    $p_condition = addslashes ($_POST['p_condition']);
    $P_item_type = addslashes ($_POST['P_item_type']);
    $p_decription = addslashes ($_POST['p_decription']);
    $p_contact_number = addslashes ($_POST['p_contact_number']);

    $P_imag1 = $unique_image;
    $P_imag2 = $unique_image2;
    $P_imag3 = $unique_image3;
    $P_imag4 = $unique_image4;






  $sql = "UPDATE adds set city='$city', county='$county', zip_code='$zip_code', uni_id='$uni_id', P_title='$P_title', P_catagory='$P_catagory', p_sub_catagory='$p_sub_catagory', p_price='$p_price', p_condition='$p_condition', P_item_type='$P_item_type', p_decription='$p_decription', p_contact_number='$p_contact_number', P_imag1='$P_imag1', P_imag2='$P_imag2', P_imag3='$P_imag3', P_imag4='$P_imag4'where id=$id ";
  if ($conn->query($sql) === TRUE) 
  {    
      
      header("location: user-dashboard.php");
  } 
  else 
  {   
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  $conn->close();  
?>

