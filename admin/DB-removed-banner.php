    <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

      
  include 'inc/config.php';
     
  
   
           
/*Logo Image End here*/


  $sql = "UPDATE category set cat_id='', en_banner_title='', de_banner_title='', en_banner_dec='', de_banner_dec='', en_botton_text='', de_botton_text='', button_url='', banner_img='' where id =$id ";
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

