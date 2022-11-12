<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_contact_info"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-contat-info.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["Address_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Address_in_english"]; ?>" class="medium" name="en_location" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Address_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Address_in_German"]; ?>" class="medium" name="de_location" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Mobile_Number_in_english"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Mobile_Number_in_english"]; ?>" class="medium" name="en_number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Mobile_Number_in_German"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Mobile_Number_in_German"]; ?>" class="medium" name="de_number" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Email_in_english"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Email_in_english"]; ?>" class="medium" name="en_email" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Email_in_German"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Email_in_German"]; ?>" class="medium" name="de_email" />
                            </td>
                        </tr>
                        
                       
                        
                     
                        <tr>
                            
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