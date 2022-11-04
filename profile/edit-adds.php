<?php include 'inc/hader.php'; ?> 



	<div class="banner text-center">
	  <div class="container">    
			<h1>Sell or Advertise   <span class="segment-heading">    anything online </span> with Resale</h1>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
			<a href="post-ad.html">Post Free Ad</a>
	  </div>
	</div>

  <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

  
                   
                      $query = "select * from adds where id= $id ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>


	<!-- Submit Ad -->
	<div class="submit-ad main-grid-border">
		<div class="container">
			<h2 class="head">Post an Ad</h2>
			<div class="post-ad-form">
				<form action="dbconncet_editeadds.php? $id=<?php echo $result['id']; ?>" class="job-post-form" method="post"  data-provide="validation" data-disable="false" method="post" autocomplete="off" enctype="multipart/form-data" >







                             

                             <input name="city" type="text" class="phone" value="<?php   echo $result['city'];  ?>" style="display: none;">
                             <input name="county" type="text" class="phone" value="<?php   echo $result['county'];  ?>" style="display: none;">
                             <input name="zip_code" type="text" class="phone" value="<?php   echo $result['zip_code'];  ?>" style="display: none;">
                             <input name="uni_id" type="text" class="phone" value="<?php   echo $result['uni_id'];  ?>" style="display: none;">

               









					<label>Ad Title <span>*</span></label>
					<input  name="P_title" type="text" class="phone" value="<?php echo $result['P_title']; ?>">
					<div class="clearfix"></div>

					<label>Select Category <span>*</span></label>
					<select class="" name="P_catagory">
					  <option value="">Select Category</option>
					  <?php
                             $query = "select * from category";
                            $post = $db->select($query);
                            if ($post) {
                              while ($result= $post -> fetch_assoc()) {
                        ?>
					  <option value="<?php echo $result['id']; ?>"><?php echo $result[$lang.'_title']; ?></option>

					<?php }}?>
					</select>
					<div class="clearfix"></div>
					  <?php

          if (!isset($_GET['$id']) || $_GET['$id']==NULL  ) {
            header("Location: 404.php") ;
           
          }else{
             $id= $_GET['$id'];
          }

  
                   
                      $query = "select * from adds where id= $id ";
                      $post = $db->select($query);
                      $result= $post -> fetch_assoc()
                        ?>

					<label>Price <span></span></label>
					<input name="p_price" type="text" class="phone" value="<?php echo $result['p_price']; ?>">
					<div class="clearfix"></div>

					<label>Condition <span></span></label>
					<input name="p_condition" type="text" class="phone" value="<?php echo $result['p_condition']; ?>">
					<div class="clearfix"></div>


					<label>Item Type <span></span></label>
					<input name="P_item_type" type="text" class="phone" value="<?php echo $result['P_item_type']; ?>">
					<div class="clearfix"></div>




					<label>Ad Description <span>*</span></label>
					<textarea name="p_decription" id="editor"   class="form-control tinymce" value=""><?php echo $result['p_decription']; ?></textarea>
					<div class="clearfix"></div>
				<div class="upload-ad-photos">
				<label>Photos for your ad :</label>	
					<div class="photos-upload-view">
						<input name="P_imag1" type="file" class="phone" value="<?php echo $result['P_imag1']; ?>">
					</div>
					<div class="clearfix"></div>
						
				</div>
				<div class="upload-ad-photos">
				<label>2nd Photos for your ad :(optional)</label>	
					<div class="photos-upload-view">
						<input name="P_imag2" type="file" class="phone"  value="<?php echo $result['P_imag2']; ?>">
					</div>
					<div class="clearfix"></div>
						
				</div>
				<div class="upload-ad-photos">
				<label>3rd Photos for your ad :(optional)</label>	
					<div class="photos-upload-view">
						<input name="P_imag3" type="file" class="phone"  value="<?php echo $result['P_imag3']; ?>">
					</div>
					<div class="clearfix"></div>
						
				</div>
				<div class="upload-ad-photos">
				<label>4th Photos for your ad :(optional)</label>	
					<div class="photos-upload-view">
						<input name="P_imag4" type="file" class="phone"  value="<?php echo $result['P_imag4']; ?>">
					</div>
					<div class="clearfix"></div>
						
				</div>
					<div class="personal-details">
					
						
						<label>Your Mobile No <span>*</span></label>
						<input name="p_contact_number" type="text" class="phone"  value="<?php echo $result['p_contact_number']; ?>">
						<div class="clearfix"></div>
					
						<p class="post-terms">By clicking <strong>post Button</strong> you accept our <a href="terms.php" target="_blank">Terms of Use </a> and <a href="privacy.php" target="_blank">Privacy Policy</a></p>
					<input type="submit" value="Post">					
					<div class="clearfix"></div>
					</form>
					</div>
			</div>
		</div>	
	</div>
	<!-- // Submit Ad -->

<?php include 'inc/foter.php'; ?> 