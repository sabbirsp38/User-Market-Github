<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Banner"]; ?></h2>
                <div class="block">               
                 <form action="DB-banner.php" method="post" enctype="multipart/form-data">
                    <table class="form">

                        <tr>
                            <td>
                                <label><?php echo $language["Catagoty"]; ?></label>
                            </td>
                            <td>
                                <select class="" name="cat_id" onchange="check(this.value)">
                                <option><?php echo $language["Select_Category"]; ?></option>
                                  <?php
                                         $query = "select * from category";
                                        $post = $db->select($query);
                                        if ($post) {
                                          while ($result= $post -> fetch_assoc()) 
                                          {
                                          $gat_cat= $result['cat_id'];


                                    ?>
                                  <option  value="<?php echo $result['cat_id']; ?>"><?php echo $result[$lang.'_title']; ?></option>

                                <?php }}?>

                               </select>
                            </td>
                        </tr>
                       
                        <tr>
                            <td>
                                <label><?php echo $language["English_Banner_Title"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["English_Banner_Title"]; ?>..." class="medium" name="en_banner_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["German_Banner_Title"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["German_Banner_Title"]; ?>..." class="medium" name="de_banner_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["English_Banner_Discription"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["English_Banner_Discription"]; ?>..." class="medium" name="    en_banner_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["German_Banner_Discription"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["German_Banner_Discription"]; ?>..." class="medium" name="    de_banner_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["English_Button_Text"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["English_Button_Text"]; ?>..." class="medium" name="    en_botton_text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["German_Button_Text"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["German_Button_Text"]; ?>..." class="medium" name="    de_botton_text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Button_URL"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Button_URL"]; ?>..." class="medium" name="    button_url" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Banner_Image"]; ?></label>
                            </td>
                            <td>
                                <input type="file" placeholder="" class="medium" name="    banner_img" />
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