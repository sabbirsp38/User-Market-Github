<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Footer_section_two"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-footer2.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["Footer_section_two_title_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Footer_section_two_title_in_english"]; ?>" class="medium" name="en_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Footer_section_two_title_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Footer_section_two_title_in_German"]; ?>" class="medium" name="de_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Footer_section_two_Description_in_english"]; ?></label>
                            </td>
                            <td>
                                  <textarea name="en_dec" class="tinymce"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Footer_section_two_Description_in_German"]; ?></label>
                            </td>
                            <td>
                                  <textarea name="de_dec" class="tinymce"></textarea>
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