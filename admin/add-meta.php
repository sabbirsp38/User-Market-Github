<?php include 'inc/hader3.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_SEO_Information"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-seo-info.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Title_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Meta_Title_in_english"]; ?>" class="medium" name="en_meta_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Title_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Meta_Title_in_German"]; ?>" class="medium" name="de_meta_titile" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Description_in_english"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Meta_Description_in_english"]; ?>" class="medium" name="en_meta_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Description_in_German"]; ?></label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Meta_Description_in_German"]; ?>" class="medium" name="de_meta_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Keword_in_english"]; ?> ( <?php echo $language["Use_comma_separator_to_add_multiple_keyword"]; ?>)</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Meta_Keword_in_english"]; ?>" class="medium" name="en_meta_keword" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Meta_Keword_in_German"]; ?> ( <?php echo $language["Use_comma_separator_to_add_multiple_keyword"]; ?>)</label>
                            </td>
                            <td>
                                   <input type="text" placeholder="<?php echo $language["Meta_Keword_in_German"]; ?>" class="medium" name="de_meta_keword" />
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