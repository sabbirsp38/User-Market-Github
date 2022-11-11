

			<div class="select-box">
				<form action="search.php"  method="get">
				<div class="select-city-for-local-ads ads-list">
					<label><?php echo $language["Select_your_city_to_see_local_ads"]; ?></label>
						<select name="search_location">
							<option  value=""><?php echo $language["Entire_Location"]; ?></option>
							 <?php
                          $query = "select * from location";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>
												
													
							<option value="<?php echo $result[$lang.'_city']; ?>"><?php echo $result[$lang.'_city']; ?></option>

								<?php }} ?>			
			            </select>
				</div>
				<div class="browse-category ads-list">
					<label><?php echo $language["Browse_Categories"]; ?></label>
					<select name="search_cat" class="selectpicker show-tick" data-live-search="true">
                       <option value=""><?php echo $language["Entire_Categories"]; ?></option>
					 <?php
                          $query = "select * from category";
                          $post = $db->select($query);
                          if ($post) {
                            while ($result= $post -> fetch_assoc()) {
                            ?>
												
													
							<option value="<?php echo $result['cat_id']; ?>"><?php echo $result[$lang.'_title']; ?></option>

								<?php }} ?>	
					 
					</select>
				</div>
				<div class="search-product ads-list">
					<label><?php echo $language["Search_for_a_specific_product"]; ?></label>
					<div class="search">
						<div id="custom-search-input">
						<div class="input-group">
							<input name="search_text" type="text" class="form-control input-lg" placeholder="Buscar" />
							<span class="input-group-btn">
								<button type="submit" value="Search" class="btn btn-info btn-lg" >
									<i class="glyphicon glyphicon-search"></i>
								</button>
							</span>
						</div>


					</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</from>
			</div>



