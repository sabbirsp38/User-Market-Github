<?php

    $servername = 'localhost';
    $username   = 'root'; // Username
    $password   = ''; // Password
    $dbname     = "usermarket";
    $conn       = mysqli_connect($servername,$username,$password,"$dbname");
    
    if(!$conn){
        die('Could not Connect MySql Server:' .mysql_error());
    }

            
$category_id = addslashes ($_POST['category_id']); 
 
$original_id= substr($category_id , 0, -2);          
$active_lang = substr($category_id, -2);;


$result = mysqli_query($conn, "SELECT * FROM sub_catagory where parent_cat = $original_id");
?>

<option value="">Select Sub Category</option>
<?php
while ($row = mysqli_fetch_array($result)) {
    ?>
    <option value="<?php echo $row["id"]; ?>"><?php echo $row[$active_lang."_name"]; ?></option>
    <?php
}
?>