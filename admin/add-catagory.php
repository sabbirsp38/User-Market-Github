<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Category"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-category.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["Category_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Category_in_english"]; ?>..." class="medium" name="en_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Category_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Category_in_German"]; ?>..." class="medium" name="de_title" />
                            </td>
                        </tr>
                         <tr>
                            <td>
                                <label><?php echo $language["Category_Icon"]; ?></label>
                            </td>
                            <td>
                                <input type="file" placeholder="" class="medium" name="icon" />
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