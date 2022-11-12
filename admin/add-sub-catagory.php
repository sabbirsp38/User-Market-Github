<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2><?php echo $language["Add_Sub_Category"]; ?></h2>
                <div class="block">               
                 <form action="DB-add-sub-category.php" method="post" enctype="multipart/form-data">
                    <table class="form">
                       
                        <tr>
                            <td>
                                <label><?php echo $language["Name_in_english"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Name_in_english"]; ?>..." class="medium" name="en_name" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label><?php echo $language["Name_in_German"]; ?></label>
                            </td>
                            <td>
                                <input type="text" placeholder="<?php echo $language["Name_in_German"]; ?>..." class="medium" name="    de_name" />
                            </td>
                        </tr>


                         <tr>
                            <td>
                                <label><?php echo $language["Parent_category"]; ?></label>
                            </td>
                            <td>
                                <select class="" name="parent_cat" onchange="check(this.value)">
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