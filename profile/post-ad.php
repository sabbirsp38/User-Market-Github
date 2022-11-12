<?php include 'inc/hader.php'; ?> 

<?php //include '../inc/templect/baner.php'; ?> 



<!-- Submit Ad -->
    <div class="submit-ad main-grid-border">
        <div class="container">
            <h2 class="head"><?php echo $language["Post_an_Ad"]; ?></h2>
            <div class="post-ad-form">
                <form action="dbconncet_addspoast.php" class="job-post-form" method="post"  data-provide="validation" data-disable="false" method="post" autocomplete="off" enctype="multipart/form-data" >










<?php
                            $query = "select * from users WHERE uni_id='$uni_id' order by id desc";
                            $post = $db->select($query);
                            if ($post) {
                             $result= $post -> fetch_assoc();
 ?>


                             

                             <input name="city" type="text" class="phone" value="<?php   echo $result['city'];  ?>" style="display: none;">
                             <input name="county" type="text" class="phone" value="<?php   echo $result['county'];  ?>" style="display: none;">
                             <input name="zip_code" type="text" class="phone" value="<?php   echo $result['zip_code'];  ?>" style="display: none;">
                             <input name="uni_id" type="text" class="phone" value="<?php   echo $result['uni_id'];  ?>" style="display: none;">

                    <?php     }
                        ?>










                    <label> <?php echo $language["Ad_Title"]; ?><span>*</span></label>
                    <input name="P_title" type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>
                    


                                <div class="form-group">
                                    <label for="CATEGORY-DROPDOWN"><?php echo $language["Category"]; ?></label>
                                    <select class="form-control" id="category-dropdown" name="P_catagory">
                                        <option value=""><?php echo $language["Select_Category"]; ?></option>
                                        <?php
                                        $result = mysqli_query($conn, "SELECT * FROM category ");
                                        while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <option value="<?php echo $row['cat_id']; echo $lang; ?>"><?php echo $row[$lang."_title"]; ?></option>
                                            <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="SUBCATEGORY"><?php echo $language["Sub_Category"]; ?></label>
                                    <select class="form-control" id="sub-category-dropdown" name="p_sub_catagory">
                                        <option value=""><?php echo $language["Select_Sub_Category"]; ?></option>
                                    </select>
                                </div>



                    <label> <?php echo $language["Price"]; ?><span></span></label>
                    <input name="p_price" type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>

                    <label><?php echo $language["Condition"]; ?> <span></span></label>
                    <input name="p_condition" type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>


                    <label><?php echo $language["Item_Type"]; ?> <span></span></label>
                    <input name="P_item_type" type="text" class="phone" placeholder="">
                    <div class="clearfix"></div>




                    <label><?php echo $language["Ad_Description"]; ?> <span>*</span></label>
                    <textarea name="p_decription" id="editor"   class="form-control tinymce" placeholder="Write few lines about your product"></textarea>
                    <div class="clearfix"></div>
                <div class="upload-ad-photos">
                <label><?php echo $language["Photos_For_Your_Ad"]; ?>:</label> 
                    <div class="photos-upload-view">
                        <input name="P_imag1" type="file" class="phone" placeholder="">
                    </div>
                    <div class="clearfix"></div>
                        
                </div>
                <div class="upload-ad-photos">
                <label><?php echo $language["2nd_Photos_For_Your_Ad_Optional"]; ?></label>   
                    <div class="photos-upload-view">
                        <input name="P_imag2" type="file" class="phone" placeholder="">
                    </div>
                    <div class="clearfix"></div>
                        
                </div>
                <div class="upload-ad-photos">
                <label><?php echo $language["3rd_Photos_For_Your_Ad_Optional"]; ?></label>   
                    <div class="photos-upload-view">
                        <input name="P_imag3" type="file" class="phone" placeholder="">
                    </div>
                    <div class="clearfix"></div>
                        
                </div>
                <div class="upload-ad-photos">
                <label><?php echo $language["4th_Photos_For_Your_Ad_Optional"]; ?></label>   
                    <div class="photos-upload-view">
                        <input name="P_imag4" type="file" class="phone" placeholder="">
                    </div>
                    <div class="clearfix"></div>
                        
                </div>
                    <div class="personal-details">
                    
                        
                        <label> <?php echo $language["Your_Mobile_No"]; ?><span>*</span></label>
                        <input name="p_contact_number" type="text" class="phone" placeholder="">
                        <div class="clearfix"></div>
                    
                        <p class="post-terms"> <?php echo $language["By_clicking"]; ?><strong> Button<?php echo $language["post"]; ?></strong>  <?php echo $language["you_accept_our"]; ?><a href="terms.php" target="_blank"> <?php echo $language["Terms_of_Use"]; ?></a>  <?php echo $language["and"]; ?><a href="privacy.php" target="_blank"><?php echo $language["Privacy_Policy"]; ?></a></p>
                    <input type="submit" value="<?php echo $language["Post"]; ?>">                  
                    <div class="clearfix"></div>



                </form>
            </div>
        </div>
    </div>




        <script src="https://code.jquery.com/jquery-3.5.1.min.js"  crossorigin="anonymous"></script>
        <script>
            $(document).ready(function() {
                $('#category-dropdown').on('change', function() {
                    var category_id = this.value;
                    var lang = "<?php echo $lang;  ?>";
                    
                    $.ajax({
                        url: "get-subcat.php",
                        type: "POST",
                        data: {
                            category_id: category_id,lang:lang
                        },
                        cache: false,
                        success: function(result) {
                            $("#sub-category-dropdown").html(result);
                        }
                    });

                });
            });
        </script>
    

<?php include 'inc/foter.php'; ?> 