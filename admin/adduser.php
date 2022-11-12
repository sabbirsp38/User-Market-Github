<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 

        <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Admin"]; ?></h2>
                <div class="block">               
                 <form action="dbconncetuser.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["User_Name"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["User_Name"]; ?>..." class="medium" name="username" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Password"]; ?></label>
                            </td>
                            <td>
                                <input type="password" placeholder="<?php echo $language["Password"]; ?>..." class="medium" name="password" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="<?php echo $language["Save"]; ?>" />
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>
            </div>
        </div>
        <div class="clear">
        </div>
    </div>
   <?php include 'inc/foter.php'; ?> 
