<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Location"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-location.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["City_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["City_in_english"]; ?>" class="medium" name="en_city" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["City_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["City_in_German"]; ?>" class="medium" name="de_city" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label><?php echo $language["Country_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Country_in_english"]; ?>" class="medium" name="en_country" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Country_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Country_in_German"]; ?>" class="medium" name="de_country" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label><?php echo $language["Zip_Code_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Zip_Code_in_english"]; ?>" class="medium" name="en_zip_code" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Zip_Code_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Zip_Code_in_German"]; ?>" class="medium" name="de_zip_code" />
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



<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>