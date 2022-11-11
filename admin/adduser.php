<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 

        <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add New Post</h2>
                <div class="block">               
                 <form action="dbconncetuser.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label>USER NAME</label>
                            </td>
                            <td>
                                <input type="text" placeholder="Enter Post Title..." class="medium" name="username" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>PASSWORD</label>
                            </td>
                            <td>
                                <input type="password" placeholder="Enter Post Title..." class="medium" name="password" />
                            </td>
                        </tr>
                     
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" name="submit" Value="Save" />
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
