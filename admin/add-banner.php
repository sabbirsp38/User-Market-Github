<?php include 'inc/hader.php'; ?>
<?php include 'inc/saidber.php'; ?> 





       <div class="grid_10">
        
            <div class="box round first grid">
                <h2>Add Banner</h2>
                <div class="block">               
                 <form action="DB-banner.php" method="post" enctype="multipart/form-data">
                    <table class="form">

                        <tr>
                            <td>
                                <label>Catagoty</label>
                            </td>
                            <td>
                                <select class="" name="cat_id" onchange="check(this.value)">
                                <option>Select Category</option>
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
                                <label>English Banner Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in english..." class="medium" name="en_banner_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Garman Banner Title</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in english..." class="medium" name="de_banner_title" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>English Banner Discription</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="    en_banner_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Garman Banner Discription</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="    de_banner_dec" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>English Button Text</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="    en_botton_text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Garman Button Text</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="    de_botton_text" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Button URL</label>
                            </td>
                            <td>
                                <input type="text" placeholder="City in Garman..." class="medium" name="    button_url" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Banner Image</label>
                            </td>
                            <td>
                                <input type="file" placeholder="City in Garman..." class="medium" name="    banner_img" />
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



<?php include 'inc/foter.php'; ?>  

<script type="text/javascript">

        $(document).ready(function () {
            setupLeftMenu();

            $('.datatable').dataTable();
            setSidebarHeight();


        });
    </script>